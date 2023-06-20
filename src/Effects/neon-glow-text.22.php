<!DOCTYPE html>
<html>
<!--
  File: neon-glow-text.php
  Vers: 2.2
  Desc: show neon text glow effect and source file listings
  Date: 2023-03-12
  URL:  <https://sumkittehz.w3spaces.com/neon-glow-text.php>
  Note: From the CSS3 example text-shadow5 at w3schools
    <https://www.w3schools.com/css/tryit.asp?filename=trycss3_text-shadow5>
  
  TODO: 

  Change-Log:
    2023-03-13:0125-pdw
    2023.03.15 33:23-pdw
      Added "orb" object
-->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php
      /* SET UP SOME VARIABLES */
      /* source filenames for this example:  */
      $filename = "neon-glow-text";
      /* added version number strings to source file names -pdw */
      $php_vers = ".22"; // add leading '.' here 
      $css_vers = "";
      $phpfn = $filename.$php_vers.".php";
      $cssfn = $filename.".css";
      /* source files to display listings of: */
      $srcfiles = array( "styles.css","file-listing.css",$cssfn,$phpfn );
      /* id value for glowing text blocks by color: */
      $shadid = array(  'neonred'=>"Red",
                        'neonyel'=>"Yellow",
                        'neongrn'=>"Green",
                        'neonblu'=>"Blue",
                        'neonpur'=>"Purple", );
      $colorids = array_keys($shadid);
      // array( 'neonred','neonorg','neonyel','neongrn','neonblu','neonpur' );
      
    ?>
    <title>neon glow text</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Space+Mono|Muli"/>
    <?php
      foreach ( $srcfiles as $srcfn ) {
        echo '<link rel="stylesheet" href="'.$srcfn.'"/>'."\n";
      }
    ?>
    <style>
      body {margin:0;padding:25px;background-color:black;}
      h1 {margin:48px;font-size:24pt;width:48%;}
      #glowex { border:silver 1px solid;background-color:black; }
      #orb {
        position:absolute;
        right:0;
        top:0;
        margin:6em;
        margin-top:75pt;
        margin-right:75pt;
        width: 150pt;
        height: 150pt;
        padding: 50pt;
        border-radius:50%;

        box-shadow: 25px 25px 25px violet,25px 25px 25px violet,
                    -25px -25px 25px violet, -25px -25px 25px violet,
                    -25px 0px 25px violet, 0px -25px 25px violet,
                    0px -25px 25px violet, -25px 0px 25px violet,
                    0px 25px 25px violet,25px 0px 25px violet;

        outline-style:solid;
        outline-width:12px;
        outline-color:magenta;
        text-shadow: -5px -5px 10px white, 5px 5px 10px white;

        background-color: purple;
        background: radial-gradient(closest-side at 60% 55%,  purple, blue, red, magenta );
        background: 
        border: 1px solid violet;
      }
      h1 {
        max-width:50%
        margin-right:auto;
        margin-left:24pt;
        margin-top:24pt;
      }
    </style>
  </head>
  <body>
    <div id="glowex">
      <?php
        foreach ($colorids as $glowid) {
          echo 
            '<h1 class="'.$glowid.'">Text shadowed with '.$shadid[$glowid].
              " glow!</h1>\n";
        }
      ?>
      <div id="orb">orb</div>
    </div>
    <!--!
      Display source file listings
    -->
    <div class="listings">
      <h2 class="listinghdr">Code Listings for this Example</h2>
    <?php
      foreach ($srcfiles as $srcfn) {
        echo  '<h3 class="listingtop">'.$srcfn."</h3>\n";  
        echo  '<div class="listing">'."\n";
        highlight_file($srcfn);
        echo "</div><!-- close div.listing $srcfn W-->\n";
        echo '<h3 class="listingbot">'.$srcfn."&nbsp;&lt;eof&gt;</h3>\n";
      }
    ?>
    </div><!-- class="listings" -->  
  </body>
</html>
