<?php
/*
  examples used in this code come from 
    <https://www.w3schools.com/php/func_directory_scandir.asp>
    <https://www.w3schools.com/php/func_string_printf.asp>

*/
/* define the field widths to use for directory listing lines */
$fldwid = array(
  'bytes' => "12", /* 12 digits for file size in bytes */
  'perms' => "4",  /*  4 digits for permissions */
  'times' => "16", /* 16 characters for date & time */
  'names' => "",   /* 	filename width is not defined */
);
/* define the format for the direcotry listing lines */
$fmtstr=
  "%".$fldwid['bytes']."s ".
  "%".$fldwid['times']."s ".
  "%".$fldwid['names']."s\n";
/* 
	add an underline to the listing header line before we 
	add it to the outpput array 
*/
$dirlsthdr = '<span style="text-decoration:underline;">'.
 				sprintf( $fmtstr,
                          "bytes",
                          "ctime",
                          "filename").
             '</span>';
$lines = array( $dirlsthdr );   /* add the header to output lines */
$datefmtstr = "Ymd:His"; 		/* date format string */
$cwd 		= getcwd(); 		/* get name of current working dir */
$files 		= scandir($cwd); 	/* get the list files */ 
/* 
	iterate through the files in this directory 
*/
foreach ($files as $fn) {
	/* skip the '.' & '..' entries */
  	if (( $fn === '.' ) || ( $fn === '..' )) { continue; }
  
    /* 
    	append formatted output lines to output array
    */
    $lines[] = sprintf($fmtstr,
                    filesize($fn),	/* get the filesize */
                    date( $datefmtstr, filectime($fn)),
                    $fn
                  );
}
/* **********************************************************
    ## KEEP ALL HTML Below this line
 * **********************************************************
	   output an HTML document with the directory listing
     
     TODO:  The PHP Code should be independent of the HTML
            output code.  All HTML should be provided by 
            templates which may instanciate the PHP 
            object(s).
            
*/
echo '<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>'.
	  $cwd.
    '</title>
  </head>
  ';
/*
	open the body element
*/ 
echo '<body>
    <code>
      <pre>
';
/* add the directory lines */
foreach ($lines as $ln) {
  echo '       '. $ln.'';
}
echo '      </pre>
	</code>
  </body>
</html>';
?>
