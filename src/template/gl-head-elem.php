<?php
/* 
   File:  gl-head-elem.php
   Date:  2023-04-16
   Auth:  sumkittehz.codes
   Desc:  This module provides the <head></head> element for the grid-layout template
          as a string.  The module constructs the HTML element as an output string,
          then writes the accumulated HTML to std out.
          Note that if this module is to be used as part of a live page, then the 
          $DocumentTitleString should be set, below, and any additional <meta/> elements, 
          stylesheet <link/> elements should be specified here.  Addition <style></style>
          elements may also be added.
*/
$DocumentTitleString = "codez: Grid Layout Template Example";
$metaelements = array (
    '<meta name="viewport" content="width=device-width,initial-scale=1.0"/>',
    '<meta charset="UTF-8"/>',
);

/* 
$stylesheets is an array of stylesheet filenames 
gl-details.css
gl-filelisting.css
gl-info.css
gl-item-head.css
gl-style.css
grid-layout.10.css
*/
$stylesheets = array (
    "grid-layout.10.css",
    "gl-info.css",
    "gl-details.css",
    "gl-filelisting.css",
    "gl-item-head.css",
    "gl-style.css",
);

/* $html_output_string accumulates HTML for output */
/* add the <head> element open tag to $output_sring*/
$html_output_string = "<head>\n";

/* add document's title string to $html_output_string */
$html_output_string .= "  <title>$DocumentTitleString</title>\n";

/* add <meta> elements to $html_output_string */
foreach ($metaelements as $meta) {
    $html_output_string .= "  $meta\n";
}

/* add stylesheet link elements to $html_output_string */
foreach ($stylesheets as $fn) {
    $html_output_string .= '<link rel="stylesheet" href="'.$fn.'"/>'."\n";
}

/* add additional <style> element */
$html_output_string .= "    <style>\n  "
    . "    .grid-container div { font-size:10pt; font-weight:normal; }\n"
    . "  </style>\n";

/* add closing head element tag */
$html_output_string .= "</head>\n";

/* Ouput the accomulated HTML */
echo $html_output_string;
?>
