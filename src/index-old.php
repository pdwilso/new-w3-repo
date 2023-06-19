<?php
/*
  File: index.php
  Desc: Main index for Raspbdery Pi Apache site
  Date: 2023-05-15
  Auth: sumkittehz.codes
 */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>raspberrypi.local</title>
    <meta  name="viewport"
	    content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="styles.css"/>
    <link rel="stylesheet" href="index-menu.css"/>
    <link rel="stylesheet" href="dir-list-table.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono%7CMuli"/>

     <style>
* {
    box-sizing:border-box;
    padding:0;
    margin:0;
}
body
{
    background-color:black;
    color:lime;
}
div p
{
    margin-top:0.1em;
    margin-bottom:0.1em;
    padding-top:0.10em;
    padding-bottom:0.10em;
}
div p mark
{
    padding-left:1em;
    padding-right:1em;
}
</style>
  </head>
  <body>
  <div class="header">
    <h1><code>raspberrypi.local</code></h1>
  </div><!-- close div class=header -->
  <div class="row">
    <div class="col-3 col-s-3 menu">
    <?php
      $compiler_url = "https://www.w3schools.com/tryit/trycompiler.asp";
      $tryit_editor = "https://www.w3schools.com/tryit/tryit.asp";
      $spaceedurl = "https://spaces.w3schools.com/space/sumkittehz/editor";
      $menuitems  = array(
          array(
              'lbl' => "sumkitthz.codes",
              'url' => "https://sumkittehz.codes/",
              'tip' => "sumkittehz.codes"
          ),
          array(
              'lbl' => "sumkittehz w3 space",
              'url' => "https://sumkittehz.w3spaces.com/",
              'tip' => "sumkittez.w3spaces.com"
          ),
          array(
              'lbl' => "equal.w3spaces.com",
              'url' => "https://equal.w3spaces.com/",
              'tip' => "equal.w3spaces.com"
          ),
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
echo '<h4>W3 Spaces Menu</h4>'
    .  '<ul class="menu">';
foreach($menuitems as $item) {
	$str = '<li><a target="_blank" rel="nofollow" ';
    $str .= 'href="' . $item['url'] . '" >';
    $str .= '';
    echo '<li><a target="_blank" title="'.
                                         $item['tip']
                                         .'" href="' .
                                         $item['url']
                                         . '">' .
                                         $item['lbl']
                                         . '</a></li>';
}
echo '</ul><!-- close ul.menu -->';
?>
    </div><!-- close div class=col-3 col-s-3 menu -->
    <div class="col-9 col-s-9" style="border:1px solid silver;">
      <p style="text-align:center;border:1px solid yellow;">
      	Below is a listing of files that are shared from this site.
      </p>
      <p style="text-align:center;border:1px solid yellow;">
      	 <em><strong><mark>USE AT YOUR OWN RISK</mark></strong></em>
      </p>
<?php
            require "./dirtable.php";
?>
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
