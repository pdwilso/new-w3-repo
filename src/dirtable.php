<?php
/*
 *   File: dirtable.php
 *   Desc: Embedable directory listing table
 *   Auth: sumkittehz.codes
 *   Date: 2023-06-07 / Modified: 2023-06-16
 */

/*
 *   Define some field widths for the directory output listing
 */
$fldwid = array
        (
            'bytes' => "12", /* 12 digits for file size in bytes */
            'perms' => "4",  /*  4 digits for permissions */
            'times' => "16", /* 16 characters for date & time */
            'names' => "",   /*    filename width is not defined */
        );

/*  Create printf() style format string for dir fld output
 */
$fmtstr =
        "%".$fldwid['bytes']."s ".
        "%".$fldwid['times']."s ".
        "%".$fldwid['names']."s\n";

/* Set the caption text to be display above the listing table:
*/
$caption_text = "Directory listing of " . getcwd() ;

/* prime the output array with the opening tags for the <div>
 * container element, the <table> element, and the <caption> element.
 */
$output_lines = array ();
$output_lines[] = '      <div style="overflow-x:auto;">'   ."\n";
$output_lines[] = '        <table class="dirlisting">'     ."\n";
$output_lines[] = "          <caption>$caption_text</caption>\n";

$datefmtstr = "Ymd:His"; 	/* date format string */
$cwd 	    = getcwd(); 	/* get name of current working dir */
$files	    = scandir($cwd); 	/* get the list files */

/* Filter out hidden files & any other files we don't want to see
*/
$result     = preg_grep
            (
                '/^\./',$files, PREG_GREP_INVERT
            );

/*    For each filename that got through the filter, make a table row
 *    entry for the file.
 */
foreach($result as $fn)
{
    if ( is_dir($fn) )
    {
        /* handle directory links differently - create a link the
         * sub-directory, add sub-directory link to a table-cell
         * element - only provide links to sub-directories listed
         * here; these directories must have an INDEX file in order
         * to display correctly on the W3 Spaces -hosted site.
         */
        if
            (!(
                $fn === "mud" ||
                $fn === "Images" ||
                $fn === "FlexBoxEx" ||
                $fn === "voice-change-o-matic" ||
                $fn === "webaudio-examples-main" ||
                $fn === "template" ||
                $fn === "gallery-ex" ||
                $fn === "Documentation" ||
                $fn === "Audio" ||
                $fn === "SVG" ||
                $fn === "Clocks"
            ))
        {
            continue;
        }
        /*
        * Add the trailing slash to the dirname here
        */
        $fn .= '/';

    }

    if ( preg_match('/.+~$/',$fn) )
    {
		/* filter out backup files */
        continue;
	}
    /*
     *  Get the last modification time for $fn
     */
    $ctime_str = date( $datefmtstr, filectime($fn) );
    
    /*
     *  Create the <time> element as a string
     */
    $time_elem = '<time datetime="' . $ctime_str . '">'
               .   $ctime_str
               . '</time>';
    $anch_elem = '<a class="fn" target="_blank" href="./' . $fn . '">'
               .   $fn . '</a>';

    /*  Add aline to the output
     */
    $output_lines[] = "<tr><th>$time_elem</th><td>$anch_elem</td></tr>\n";
}

/* Close the table and its containing </div> element
 */
$output_lines[] = '
        </table>
      </div>
';

/*  Output the accumulated output lines
 */
foreach ($output_lines as $ln)
{
    echo $ln;
}

?>
