<?php
/*
  File: index.php
  Desc: Main index for Raspbdery Pi Apache site
  Date: 2023-05-15 (Modified 2023-07-09)
  Auth: sumkittehz.codes
CHANGELOG:
+2023-07-09 @sumkitteh
- updated to new menu file index-menu.00.php
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
    <link rel="stylesheet" href="/Clocks/clock9.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono%7CMuli"/>

     <style type="text/css">
     * { box-sizing:border-box; padding:0; margin:0; }
body { background-color:black; color:lime; }
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
                
<?php require "index-menu.00.php" ?>
                
      </div><!-- close div class=col-3 col-s-3 menu -->
      <div class="col-9 col-s-9" style="border:1px solid silver;">

	<div id="app" class="clock-app" style="padding:0;margin:auto;">
	  <object
	    style="width:100%;height:250px;margin:auto;"
	    data="/Clocks/clock9.html"
	    ></object>
	</div><!-- #app -->

	<p class="disclaimer" style="background-color:rgba(32,0,32,0.78);font-style:italic;padding:0.5em 1.0em;">
	  Below is a listing of files shared from this site. Some of
	  these files may contain executable code.  All of the codes
	  are for experimental and educational purposes only.
	  sumkittehz.codes bears no reposiblity for any damage you may
	  to do your equipment, your loved ones, or your self that may
	  be inccurred by mis-use of this code.
	</p>
    
	<p style="text-align:center;border:1px solid yellow;background-color:rgba(32,0,32,0.78);" >
	  <em><strong><mark>USE AT YOUR OWN RISK</mark></strong></em>
	</p>
	<div style="background-color:rgba(32,0,32,0.78);">
	  <?php require "./dirtable.php";?>
	</div>
      </div>
    </div>

    <div class="footer">
      <p>
	Made by <code>sumkittehz</code>.
      </p>
    </div>

  </body>
</html>
