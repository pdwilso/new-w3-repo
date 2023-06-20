<?php
  $myfn = "lib/goog-fonts.tmpl.html";
  $myfile = fopen($myfn, "r") or die("Unable to open file $myfn!");
  $mycontent = fread($myfile,filesize($myfn));
  fclose($myfile);
  /* 
      echo the opening section of the HTML document 
  */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>sumkittehz.codes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="clock2.css">
    <!-- 
      https://10015.io/tools/open-graph-meta-generator
    -->
    <meta property="og:title" content="sumkittehz.codes">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://sumkittehz.codes">
    <meta property="og:image" content="https://sumkittehz.codes/catspaw.svg">
    <meta property="og:site_name" content="sumkittehz.codes">
    <meta property="og:description" content="sum site uv sum codez uv sum kittehz & stuffz">
    <!-- ---------------- -->
  <?php echo $mycontent; ?>
    <style>
      sup {font-size:8pt;}
      .anno {font-size:10pt;padding-left:3px;padding-right:3px;}
      .fn {font-family:monospace;}
      .dirlisting dt {display:inline-block;}
      .dirlisting dd {display:inline-block;}
    </style>
    <script src="clock2.js"></script>
  </head>
  <body>
  <div class="header">
    <h1><code>sumkittehz.codes</code></h1>
  </div><!-- close div class=header -->
  <div class="row">
    <div class="col-3 col-s-3">
    <?php
      $compiler_url = "https://www.w3schools.com/tryit/trycompiler.asp";
      $tryit_editor = "https://www.w3schools.com/tryit/tryit.asp";
      $spaceedurl = "https://spaces.w3schools.com/space/sumkittehz/editor";
      $menuitems  = array(
        array(
          'lbl' => "Space Editor",
          'url' => "https://spaces.w3schools.com/space/sumkittehz/editor",
          'tip' => "W3 Spaces Editor (requires login)",
        ),
        array(
          'url' => "https://www.w3schools.com/tryit/default.asp",
          'lbl' => "Online Code Editor",
          'tip' => "W3 Schools Online Code Editor",
        ),
        array(
          'url' => "$compiler_url?filename=demo_php",
          'lbl' => "Backend Editor",
          'tip' => "W3 Backend Editor",
        ),
        array(
        	'url' => "$tryit_editor?filename=tryhtml_hello",
          'lbl' => "Frontend Editor",
          'tip' => "W3 Tryit Frontend Editor",
        ),
        array(
        	'tip' => "equal.w3spaces.com",
          'url' => "https://equal.w3spaces.com",
          'lbl' => "Equal Space",
         ),
      );
      echo '<ul class="menu">';
      foreach($menuitems as $item) {
      	echo '<li><a href="' . $item['url'] . '">' .
        	$item['lbl'] . '</a></li>';
      }
      echo '</ul><!-- close ul.menu -->';
	?>
      <div class="aside">
        <p id="clock"></p>
        <p id="calendar">11 April 2023</p>
      </div>
    </div><!-- close div class=col-3 col-s-3 menu -->
    <div class="col-6 col-s-9">
      <h2>The Directory Listing:</h2>
      <p>
        Below is a directory listing of things that are shared from this site.  
        <em><strong><mark>USE AT YOUR OWN RISK</mark></strong></em>
      </p>
      <div style="overflow-x:auto;">
        <table class='dirlisting'>
          <caption>Directory listing of <?php echo getcwd() ?></caption>
<?php
$fldwid = array(
  'bytes' => "12", /* 12 digits for file size in bytes */
  'perms' => "4",  /*  4 digits for permissions */
  'times' => "16", /* 16 characters for date & time */
  'names' => "",   /* 	filename width is not defined */
);
$fmtstr=
  "%".$fldwid['bytes']."s ".
  "%".$fldwid['times']."s ".
  "%".$fldwid['names']."s\n";
$dirlsthdr = '<span style="text-decoration:underline;">'.
                sprintf( $fmtstr,
                          "bytes",
                          "ctime",
                          "filename" ).
              '</span>';
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
    </div>

  </div>

<div class="footer">
  <p>
    Made by <code>sumkittehz</code>.
  </p>
</div>

  <script>
  function loadDoc(fn) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() {
      document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("POST", "action-page.php");
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send( fn );
  }
  </script>

  </body>
</html>
