<?php 
include("functions.php");

// HIER GAAT IETS GOED FOUT!
if (function_exists("my_predef_function")) {
	echo "My Function Exists";
} else {
	echo "My Function Does not Exists";
}
?>