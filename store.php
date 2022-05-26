<?php 

$myfile = fopen("location.txt", "a+");
$txt = "\nlatitude: " . $_GET["lat"] . "\nlongitude: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>