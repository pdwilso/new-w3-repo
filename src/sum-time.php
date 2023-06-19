<?php

$format="%d/%m/%Y %H:%M:%S";
$strf=strftime($format);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>strftime</title>
    </head>
  <body>
    <div id="app"></div>
    </body>
  </html>

<pre>

<?php
print "$strf = srtftime('$format')\n";


print "format = '$format'\n";
echo("$strf\n");
print_r(strptime($strf,$format));

?>

</pre>

</body>
</html>
<?php
 <?>
