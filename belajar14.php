<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Pilih Tanggal</h1>
    
    <form method="post" action="">
        <!-- Pilih Tanggal -->
        <label for="tgl">Pilih Tanggal:</label>
        <select name="tgl" id="tgl">
            <?php
            for ($i = 1; $i <= 31; $i++) {
                // Menampilkan opsi tanggal 1 hingga 31
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        
        <!-- Pilih Bulan -->
        <label for="bln">Pilih Bulan:</label>
        <select name="bln" id="bln">
            <?php
            for ($i = 1; $i <= 12; $i++) {
                // Menampilkan opsi bulan 1 hingga 12
                $bulan = date('F', mktime(0, 0, 0, $i, 10)); // Mengambil nama bulan dari angka
                echo "<option value=\"$i\">$bulan</option>";
            }
            ?>
        </select>
        
        <!-- Pilih Tahun -->
        <label for="thn">Pilih Tahun:</label>
        <select name="thn" id="thn">
            <?php
            for ($i = 1980; $i <= 2025; $i++) {
                // Menampilkan opsi tahun dari 1980 hingga 2025
                echo "<option value=\"$i\">$i</option>";
            }
            ?>
        </select>
        
        <br><br>
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
