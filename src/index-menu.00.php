<?php
/*
 * File: index-menu.00.php
 * Desc: This file provides the HTML for the main index menu. HTML is output on stdout
 * Date: 2023-07-09
 * Auth: sumkittehz.codes
 */
$compiler_url = "https://www.w3schools.com/tryit/trycompiler.asp";
$tryit_editor = "https://www.w3schools.com/tryit/tryit.asp";
$spaceedurl = "https://spaces.w3schools.com/space/sumkittehz/editor";
$menuitems  = array(
    array(
        'lbl' => "sumkittehz.codes",
        'url' => "https://sumkittehz.codes/",
        'tip' => "sumkittehz.codes"
    ),
    array(
        'lbl' => "Space Editor",
        'url' => "https://spaces.w3schools.com/space/sumkittehz/editor",
        'tip' => "W3 Spaces Editor (requires login)",
    ),
    array(
        'lbl' => "Online Code Editor",
        'url' => "https://www.w3schools.com/tryit/default.asp",
        'tip' => "W3 Schools Online Code Editor",
    ),
    array(
        'lbl' => "Backend Editor",
        'url' => "$compiler_url?filename=demo_php",
        'tip' => "W3 Backend Editor",
    ),
    array(
        'lbl' => "Frontend Editor",
        'url' => "$tryit_editor?filename=tryhtml_hello",
        'tip' => "W3 Tryit Frontend Editor",
    ),
    array(
        'lbl' => "Equal Space",
        'tip' => "equal.w3spaces.com",
        'url' => "https://equal.w3spaces.com",
    ),
);
echo '<h4>W3 Spaces Menu</h4>'
    .  '<nav class="main-menu">';
foreach($menuitems as $item) {
    printf("<a target=\"blank\" title=\"%s\" href=\"%s\">%s</a>",
           $item['tip'], $item['url'],$item['lbl']);
}
echo '</nav>';
?>
