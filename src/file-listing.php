<?php
/*
  File: file-listing.php
  Desc: PHP source file listing example.
  Date: 2023-05-26  (Modified 2012-06-11)
  Auth: sumkittehz.codes
    Example code from w3schools used in the making of this page:
    <https://www.w3schools.com/php/phptryit.asp?filename=tryphp_func_misc_highlight_file>

CHANGELOG:
+ 2023-06-11 sumkitteh making filename parameter work via POST
                       requiest We want to be able to invoke this
                       Module using a filename parameter and have it
                       return the souce code content of the file as
                       mark-up

 */
//  Set up some global variables in PHP
//
$thisfile =  $_SERVER['PHP_SELF'];
//
$filename = $thisfile; // default to listing ourself
//
// if we get a query paramter on the URL,
//
if ( $_GET['fn'] )
{
    // treat it like a source file name
    $filename = $_GET['fn'];
}
//
//  TODO:  Check to see if we were passed a filename
//  get filename param from query part of URL
//
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["fn"])) {

        /* This is not an error - the default is the filename of this
         * file, so by default if no filename is passed by either
         * _GET[fn] or _POST[fn], the file should provide a listing of
         * it's own source code. */
        
        //        $nameErr = "Filename is required";
        /* we don't *know* that a fn is required here, we shuold have
         * a valid default [see above] */

    } else {
        // TODO:  WHAT is 'test_input()'? 
        $name = test_input($_POST["fn"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $filename." Listing" ?></title>
    <link rel="stylesheet" type="text/css" href="file-listing.01.css" />
    <style>
      
      * { box-sizing:border-box; padding:0;margin:0;}

      header {
	font-size:3vh;
	font-weight:bold;
	font-style:italic;
	border:2px solid red;
	padding: 0.25vh 0;
      }
            
    </style>
  </head>
  <body>
    <header>
      <code>
        <?php print "_ $filename _"; ?>
      </code>
    </header>
    <div class="listingtop">
      <?php 
       print'Listing: <code>'. $filename . '</code>';
      ?>
    </div>
    <div class="listing">
      <?php highlight_file( "$filename" ) ?>
    </div>
    <div class="listingbot">
      <?php
        print "End-Listing: <code>$filename</code>";
      ?>
    </div>
  </body>
</html>
