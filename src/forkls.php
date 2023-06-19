<?php
/*
  File: forkls.php
  Desc: Create INDEX files for any subdirectories on this list that
        don't have one.
  Date: 2023-06-16
  Auth: sumkittehz.codes
*/
/*
 */
$directories = array(
    "Audio",
    "awesome-portfolio-demo",
    "Clocks",
    "Documentation",
    "Effects",
    "FlexBoxEx",
    "flexbox-vers",
    "Fonts",
    "gallery-ex",
    "grid-layouts",
    "Images",
    "lib",
    "mud",
    "RefEx",
    "SVG",
    "template",
    "voice-change-o-matic",
    "webaudio-examples-main",
    "WebGL-Fluid-Simulation",
    "ytex"
);
foreach ($directories as $dir) {
    print "./$dir/\n";
    $dirfiles = array( scandir("./$dir") );
    foreach ( array ("php","html","js","xml") as $ext ) {
        if ( file_exists( "./$dir/index.$ext") ) {
            $indexfile = "./$dir/index.$ext\n";
            print "Found $indexfile\n";
        }   
    }
}

?>
