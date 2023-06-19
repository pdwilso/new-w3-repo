<?php
abstract class File {
	public $filename;
    public $filesize;
    public function __construct($fn,$fs) {
    	$this->filename = $fn;
        $this->fllesize = $fs;
    }
	
}
interface CodeListing {
}
trait SourceCode {
}
////////////////////////////////////////////////////////////
/*
	This block is from 
    https://www.w3schools.com/php/func_directory_dir.asp
*/
$d = dir(getcwd());
echo "<pre>\n";
echo "Handle: " . $d->handle . "\n";
echo "Path: " . $d->path . "\n";
echo "-----------------------------------------------------\n";
printf("%12s %s\n","bytes","filename");
while (($file = $d->read()) !== false){
	/* throw away the '.' and '..' dir entries */
	if (($file === '.') || ($file === '..')) { continue; }
    
    /* get the filesize */
    $fsz = filesize($file);
  
  	/* https://www.w3schools.com/php/func_string_printf.asp */
    printf("%12d bytes %s\n",$fsz,$file);
}
echo "</pre>\n";
$d->close();

// ///////////////////////////////////////////////
echo "<hr/>\n";
echo "Hello World!";
echo "<hr/>\n";
// ///////////////////////////////////////////////
/*

This block is from 
  https://www.w3schools.com/php/func_directory_scandir.asp

*/
$dir = getcwd();
echo "<pre>\n  $dir\n</pre>\n";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);
echo "<pre>\n";
print_r($a);
// print_r($b);
echo "</pre>\n";

?>
