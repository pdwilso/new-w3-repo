<?php
/*  ===================================================================  */
/*
 *      File: main-menu.php

 *      Desc: This module provides the site's main menu for the sites
 *            index or landing page(s).

 *      Auth: sumkittehz.codes
 *      Date: 2023-06-07
 */
/*  ===================================================================  */
/*
 *  Define the menu items for the main menu.
 */
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

/*
 *   Declare and initialize the array of HTML output lines produced by
 *   this module.
 */
$output_lines = array();

/*
 *   Put some common URLs into some named strings.
 */
$compiler_url = "https://www.w3schools.com/tryit/trycompiler.asp";
$tryit_editor = "https://www.w3schools.com/tryit/tryit.asp";
$spaceedurl = "https://spaces.w3schools.com/space/sumkittehz/editor";


$output_lines[] = '<ul class="menu">'."\n";

foreach($menuitems as $item)
{
    $output_lines[] = '
<li>
  <a 
    class="menu-item"
    target="_blank" 
    title="'. $item['tip'] . '" 
    href="' . $item['url'] . '"
  >
    '. $item['lbl'] . '
  </a>
</li>
';
}
$output_lines[] = "</ul><!-- close ul.menu -->\n";

foreach ($output_lines as $line)
{
    print "$line";
}
?>
