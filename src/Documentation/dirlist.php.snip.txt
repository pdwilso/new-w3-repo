<?php
/*
*   File: snip-dislist.php
*   Desc: output a
*
*/
?>
      <div style="overflow-x:auto;">
        <table class='dirlisting'>
          <caption>Directory listing of <?php echo getcwd() ?></caption>
<?php
file_rec_field_names = array( 'attrs', 'size', 'ctime', 'fname', 'ftype');
$fld = {
    name
    width
    format
    
$file_types = array ( 'dir', 'txt', 'html', 'css','svg','php','js', 'rc', 'sh' );
sub mkFmt($n) {
 return( sprintf("%%%ds",$n) );
}
$fields = array(
  'bytes' => array(
                    'wid' => "12",  /* 12 digits for file size in bytes */
                    'fmt' => '%12s'
                  ),
  'perms' => array( 'wid' => "4" ),  /*  4 digits for permissions */
  'ctime' => array( 'wid' => "16" ), /* 16 characters for date & time */
  'names' => array( 'wid' => "" )   /* 	filename width is not defined */
);

# field_names = keys $fldwid;

$file_rec_fmt=
    "%".$fldwid['bytes']."s ".
    "%".$fldwid['ctime']."s ".
    "%".$fldwid['names']."s\n";
sub CreateTableHeaderFormat() {
  
  return(
    '<span style="text-decoration:underline;">'.
      sprintf( $file_rec_fmt,
                  "bytes",
                  "ctime",
                  "filename" ).
    '</span>'
        );
}
/* $lines      = array( $dirlsthdr );   add the header to output lines */
$lines      = array ();
$datefmtstr = "Ymd:His"; 		/* date format string */
$cwd 		    = getcwd(); 		/* get name of current working dir */
$files 		  = scandir($cwd); 	/* get the list files */
foreach($files as $fn){
  if ( ( $fn === '.' ) || ( $fn === '..' ) ) { continue; }
    /* $lines[] = '<><code>'.
                  sprintf($fmtstr,
                    filesize($fn),
                    date( $datefmtstr, filectime($fn)),
                    $fn
                  ).'</code></>'; */
    if (  $fn === "Images" || $fn === "mud" || $fn ==="FlexBoxEx" ||
          $fn === "voice-change-o-matic" || $fn === "webaudio-examples-main" ) {
          
          }
 
    $lines[] =  '<tr><td><code>'.date( $datefmtstr, filectime($fn)).'</code></td>'.
                '<td><code><a class="fn" target="_blank" href="'.$fn.'">'.$fn.'</a></code></td></tr>'
                . "\n";
}
foreach ($lines as $ln) {
  echo $ln;
}
?>
        </table>
      </div>
