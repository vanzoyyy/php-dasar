<?php
function salam($waktu = "Malam", $nama = "Saudara") {
    echo "<p>Selamat $waktu, $nama</p>";
}

salam();
salam("Pagi");
salam("Datang", "Pak Presiden");


function salam1($waktu, $nama = "Saudara") {
    echo "<p>Selamat $waktu, $nama</p>";
}

salam1("Pagi");
salam1("Siang", "Rina");



function coba() {
    static $a = 0;
    $a++;
    return "Ini adalah pemanggilan ke-$a fungsi coba()";
}

echo coba();
echo "<br>";
echo coba();
echo "<br>";
echo coba();
echo "<br>";
echo coba();



$a = 100;

function test() {
    $a = 500;
    echo "$a<br>";  // Output: 500
}

echo "$a<br>";  // Output: 100
test();
echo "$a<br>";  // Output: 100



$a = 100;

function test1() {
    global $a;
    $a = 500;
}

echo "$a<br>";  // Output: 100
test1();
echo "$a<br>";  // Output: 500



function coba1() {
    static $a = 0;
    $a = $a + 1;
    return "Ini adalah pemanggilan ke-$a fungsi coba()<br>";
}

echo coba1();  // Ini adalah pemanggilan ke-1 fungsi coba()
echo coba1();  // Ini adalah pemanggilan ke-2 fungsi coba()
echo coba1();  // Ini adalah pemanggilan ke-3 fungsi coba()
echo coba1();  // Ini adalah pemanggilan ke-4 fungsi coba()
?>



