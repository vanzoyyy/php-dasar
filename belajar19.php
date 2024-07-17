<?php
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambah(6, 18);
echo $a; // 24



function tambahh($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambahh(6, 10);
$b = tambahh($a, 9);

echo $b; // 25



function tambah1($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;  // Mengembalikan nilai hasil penjumlahan
}

echo tambah1(6, 10);  // 16
echo "<br>";
echo tambah1(100, 99);  // 199



function tambah2($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

echo tambah2(5, 7);
echo "<br>";
echo "Hasil dari 6 + 9 adalah: " . tambah2(6, 9);
echo "<br>";
echo tambah2(99, 1) . ", Bisa didapat dari 99 + 1";



function tambah3($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
    echo "Kalimat ini tidak akan pernah dijalankan...";  // Tidak akan dijalankan
}

echo tambah3(5, 7);  // 12


function tambah_kurang($satu, $dua) {
    $hasil[] = $satu + $dua;
    $hasil[] = $satu - $dua;
    return $hasil;
}

$hasil = tambah_kurang(10, 5);
echo "Tambah: " . $hasil[0] . "<br>";  // 15
echo "Kurang: " . $hasil[1];  // 5
?>
