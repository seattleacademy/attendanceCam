<?php
$dir = "/var/www/faces/"; //global directory
$dir = "../faces/"; // local directory, use chmod 777 faces to give write access to the server

$myfile = fopen($dir.'labeledFaceDescriptors.json', "r") or die("Unable to open file!");
$return_array = fread($myfile,filesize($dir.'labeledFaceDescriptors.json'));
fclose($myfile);
echo $return_array;

?>