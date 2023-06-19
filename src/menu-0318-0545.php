<!DOCTYPE html>
<html>
  <head>
    <title>example</title>
   	<style>
      h1,li,a {font-family:Verdana,sans-serif;}
      sup {font-size:8pt;}
      body {background-color:black;color:lime;}
	  ul.menu  {
        display:block;
        margin: 0;
        padding: 0;
        border-radius:5pt;
        list-style-type:none;
       	border: 1px cyan solid;
      }
      .menu li {
      	display:block;
        padding: 2.5pt;
		margin:2.5pt;

        opacity:1.0; 
        background-image: linear-gradient(to right, black,purple);

        border-radius:5pt;
/*        border: 5px solid blue; */
      }
      .menu li:hover {
      }
      .menu li a {
        border-radius:5pt;
        color:gold;
        background-color: rgb(0,0,128,0.0);
        
        font-size:16pt;
        text-decoration:none;
        display:block;
        
        margin:0;

        padding:2.5pt;
		padding-left:8pt;
        padding-right:8pt;  
        
  		text-shadow: -2px 0 blue, 0 2px blue, 2px 0 blue, 0 -2px blue;
        
      }
      .menu li a:hover {
        /* text-decoration:underline; */
        color:magenta;
        box-shadow: 5px 5px 5px indigo inset,
        			-5px -5px 5px indigo inset,
                    5px 5px 5px purple inset,
        			-5px -5px 5px purple inset;
      }
    </style>
    <?php
      $compiler_url = "https://www.w3schools.com/tryit/trycompiler.asp";
      $tryit_editor = "https://www.w3schools.com/tryit/tryit.asp";
      $spaceedurl = "https://spaces.w3schools.com/space/sumkittehz/editor";
      $menuitems  = array(
        array(
            'lbl' => "Space Editor",
        	'url' => "https://spaces.w3schools.com/space/sumkittehz/editor",
            'tip' => "W3 Spaces Editor (requires login)",
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
    ?>
  </head>
  <body>
    <h1>Hello World!</h1>
    <?php
      echo '<ul class="menu">';
      foreach($menuitems as $item) {
      	echo '<li><a href="' . $item['url'] . '">' .
        	$item['lbl'] . '</a></li>';
      }
      echo '</ul><!-- close ul.menu -->';
	?>
 </body>
</html>
