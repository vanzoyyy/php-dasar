<?php
$salah = TRUE; // Inisialisasi variabel status
$tebak_angka = 8; // Angka yang benar

while ($salah) {
    $input = 8; // Contoh input, dalam aplikasi nyata ini bisa dari form HTML
    if ($input == $tebak_angka) {
        $salah = FALSE; // Ubah status menjadi benar
        echo "Anda benar!";
    } else {
        echo "Jawaban anda salah, silahkan ulangi kembali<br>";
    }
}
?>
