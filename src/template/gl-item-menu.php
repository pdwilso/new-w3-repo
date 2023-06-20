<?php
/*
  File:  gl-item-menu.html
  Date:  2023-04-16
  Auth:  sumkittehz.codes
  Desc:  This module is part of the grid-layout.10 template
  Desc:  This module defines the grid area menu
 */
$html_output_string = '
  <div class="item-menu">
    <details id="ga-menu">
      <summary>
        <span class="divlabel">#item-menu</span>
      </summary>				       
      <p>This is the item-menu grid area.</p>
    </details>
';

# Define some data items the template will use:
$menuitems = array(
    array( 
        'url'=>"https://sumkittehz.codes",
        'lbl'=>"sumkittehz.codes"
    ),
    array(
        'url'=>"https://spaces.w3schools.com/",
        'lbl'=>"Spaces at W3 Schools"
    )
);
/*
## -- The Menu Block -- ##
*/ 
$html_output_string .= '
      <h2>Menu</h2>
      <ul>
';
function mkmenulink($url,$lbl) {
    return( '<li><a target="_blank" href="'.$url.'">'.$lbl."</a></li>\n" );
}
/* add individual menu items */
foreach( $menuitems as $lnk ) {
    $html_output_string .= mkmenulink( $lnk['url'], $lnk['lbl'] );
}
$html_output_string .= '      </ul>'."\n";
$html_output_string .= "   </div><!-- close class item-menu -->\n";

/* output HTML string */
echo $html_output_string;
?>

