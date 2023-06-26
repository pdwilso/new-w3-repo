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
    <link rel="stylesheet" href="/Clocks/clock9.css">
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
      .html-pg-embed {width:100%;}
    </style>
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
    <div class="aside clock-app">
    </div>
  </div><!-- close div class=col-3 col-s-3 menu -->
  <div class="col-9 col-s-9" style="background:black;">
    <object class="html-pg-embed" data="/Clocks/clock9.html"></object>
    <h2>The Directory Listing:</h2>
    <p>
        Below is a directory listing of things that are shared from this site.  
        <em><strong><mark>USE AT YOUR OWN RISK</mark></strong></em>
    </p>

    <?php require "./dirtable.php" ?>

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
