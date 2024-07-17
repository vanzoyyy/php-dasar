<?php
$situs = "www.duniailkom.com"; // Fixed assignment and added quotes around the string

$belajar1 = "Sedang belajar programming di $situs"; // Fixed variable name and used double quotes for interpolation
echo $belajar1; // Output the value of $belajar1

echo "<br>"; // Added a line break for HTML output

$belajar2 = "Sedang belajar programming di $situs"; // Added $situs to the string
echo $belajar2; // Output the value of $belajar2
?>
