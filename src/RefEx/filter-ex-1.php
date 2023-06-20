<!DOCTYPE html>
<html lang="en">
  <!--
      File:  filter-ex-1.php
      Desc:  PHP filter_var() example
      Date:  2023-06-17
      Auth:  sumkittehz.codes

      Some of this code is lifted directly from 
      https://www.w3schools.com/php/phptryit.asp?filename=tryphp_filter7

    -->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>filter-ex-1.php</title>
    <link rel="stylesheet" type="text/css"
	  href="/Documentation/documentation.css"/>
  </head>
  <body>
    <?= '<div id="app">' ?>
    <h1>
      validate URL using <code class="func">filter_var()</code>
    </h1>
    <?php $url = "https://sumkittehz.codez";   ?>
    <p>
      validating URL <code class="url"><?=$url?></code>
    </p>
    <p>
      <?php
       // Remove all illegal characters from a url
       $url = filter_var($url, FILTER_SANITIZE_URL);

       // Validate url
       if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
       echo("<code>$url</code> is a valid URL");
       echo(":&nbsp; <a href=\"$url\">$url</a>");
       } else {
           echo("<code>$url</code> is <b>not a valid URL</b>");
       }
       ?>
    </p>
<?php
 $listing_url = "/file-listing.php";
 $thisfile =  $_SERVER['PHP_SELF'];
 $hrefstr = "$listing_url?fn=.$thisfile";
 /* 
 TODO:  use filter_var() here to santize the incoming file name 
 */
print  "<p><i>click on this link &ndash;</i>
<a href=\"$hrefstr\"><code>$hrefstr</code></a>
<i>&ndash; to see the source code for this file, or</i>
<a href=\"$listing_url\"><code>$listing_url</code></a>
<i>for more about our file listing code.</i></p>
";

?>
<?= '</div><!-- #app -->' ?>
</body>
</html>
