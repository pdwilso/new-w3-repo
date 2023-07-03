<!DOCTYPE html>
<html lang="en">
<?php
          $TitleStr = $_SERVER['SERVER_NAME'] . ":" . $_SERVER['PHP_SELF'];
?>
    
    <head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $TitleStr ?></title>
	<style>
	 * { box-sizing:borderbox; padding:0; margin:0; }
	 body
	 {
	     background-color:black;
	     color:lime;
	     font-size:4vmin;
	     line-height:1.0;
	 }
	 #app
	 {
	     background-color:rgba(0,0,25,0.75);
	     color:silver;
	 }
	 #app header
	 {
	     margin:0;
	     padding:0.3em;
	     border: 1px solid #212121; 
	 }
	 #app header h1
	 {
	     font-family:monospace; font-size:5vmin;
	     border-bottom:1px solid silver;
	 }
	 #app a
	 {
	     color:cyan;
	     font-family:monospace;
	     font-size:10pt;
	     text-decoration:none;
	 }
	 #app a:hover
	 {
	     text-decoration:underline;
	     background-color:yellow;
	     color:blue;
	 }
	 #app time
	 {
	     color:gray;
	     font-family:monospace;
	     font-size:10pt;
	 }
	 .dirlisting
	 {
	     margin:0 auto;
	     border:1px solid cyan;
	 }
	 .dirlisting th,
	 .dirlisting td
	 {
	     padding:0.2em;
	 }
	 .dirlisting tr
	 {
	     background-color:midnightblue;
	 }
	</style>
    </head>
    <body>
	<div id="app">
	    <header>
		<h1><?= $TitleStr ?></h1>
	    </header>
	    <?php
	    //https://www.w3schools.com/php/func_directory_getcwd.asp
	    // echo $_SERVER['PHP_SELF'];
	    // echo "<br>";
	    // echo $_SERVER['SERVER_NAME'];
	    // echo "<br>";
	    // echo $_SERVER['HTTP_HOST'];
	    // echo "<br>";
	    // echo $_SERVER['HTTP_REFERER'];
	    // echo "<br>";
	    // echo $_SERVER['HTTP_USER_AGENT'];
	    // echo "<br>";
	    // echo $_SERVER['SCRIPT_NAME'];
	    ?>
	    <?php
	    require "../dirtable.php";
	    ?>
	</div>
    </body>
</html>
