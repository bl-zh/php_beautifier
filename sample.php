<?php 
// include the phpbeautifier class
require_once ('phpbeautifier.class.php');
// create a new object 
$phpbeautifier = new phpbeautifier ();
// load PHP source code
$code = file_get_contents ('phpbeautifier.class.php'); 
// get the formatted code
$beauty = $phpbeautifier->format_string ($code);
// As an alternative it's possible to call the class methods as static
// phpbeautifier::format_string ($code);
// phpbeautifier::format_file ($filename);

// print the formatted code in a beautiful way
//highlight_string ($formatted);

echo $beauty;