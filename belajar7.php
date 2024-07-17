<?php
$a = 0b10110101; // 181 in decimal
$b = 0b01101100; // 108 in decimal

// Operasi AND bitwise
$hasil = $a & $b;
echo $hasil; // 36 (00100100 in binary)
echo "<br>";

// Operasi OR bitwise
$hasil = $a | $b;
echo $hasil; // 253 (11111101 in binary)
echo "<br>";

// Operasi XOR bitwise
$hasil = $a ^ $b;
echo $hasil; // 217 (11011001 in binary)
echo "<br>";

// Operasi NOT bitwise
$hasil = ~$a;
echo $hasil; // -182 (negative because of two's complement)
echo "<br>";

// Operasi shift right
$hasil = $a >> 1;
echo $hasil; // 90 (1011010 in binary)
echo "<br>";

// Operasi shift left
$hasil = $b << 2;
echo $hasil; // 432 (110110000 in binary)
echo "<br>";
?>
