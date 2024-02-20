<?php

var_dump($_POST); // Print POST data for debugging

$name = $_POST['name'];
$language = $_POST['language'];

echo "This is " .$name. ". I use " .$language. ";"; 

?>