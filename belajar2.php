<?php
$koordinat = [[8, 2], [2, 4], [1, 7]]; // Define a multidimensional array

echo $koordinat[0][0]; // Outputs the first element of the first sub-array
echo "<br>"; // Line break for readability

echo $koordinat[0][1]; // Outputs the second element of the first sub-array
echo "<br>"; // Line break for readability

echo $koordinat[2][1]; // Outputs the second element of the third sub-array
echo "<br>"; // Line break for readability




$koordinat = [[8, 2], [2, 4], [1, 7]]; // Define a multidimensional array

echo "<pre>"; // Start preformatted text for readable output
print_r($koordinat); // Print the array in a human-readable format
echo "</pre>"; // End preformatted text



$siswa0 = "Andri"; // Define the variable for the first student
$siswa1 = "Joko";  // Define the variable for the second student
$siswa2 = "Sukma"; // Define the variable for the third student
$siswa3 = "Rina";  // Define the variable for the fourth student
$siswa4 = "Sari";  // Define the variable for the fifth student

// Display the value of $siswa1
echo $siswa1; // Outputs: Joko

// Display the index and value of $siswa1
echo "<br>Index adalah 1<br>";  // Explanation of the index (1-based)

echo "Index mulai dari 0<br>";  // Explanation that indices start from 0 in arrays

echo "Ke dua ber-i<br>";  // Explanation about the second item

echo "Ke tiga hampir sama<br>";  // Explanation about the third item



$macam2 = array(121, "Joko", 44.99, "Belajar PHP"); // Mendefinisikan array dengan 4 elemen

$macam2[1] = "Duniailkom"; // Mengubah elemen dengan index 1 menjadi "Duniailkom"
$macam2[2] = 212;         // Mengubah elemen dengan index 2 menjadi 212

echo "<pre>";
var_dump($macam2); // Menampilkan struktur dan nilai array
echo "</pre>";



$macam2 = array(121, "Joko", 44.99, "Belajar PHP"); // Mendefinisikan array dengan 4 elemen

unset($macam2[1]); // Menghapus elemen dengan index 1

echo "<pre>";
var_dump($macam2); // Menampilkan struktur dan nilai array setelah elemen dihapus
echo "</pre>";


$macam2 = array(121, "Joko", 44.99, "Belajar PHP", true); // Mendefinisikan array dengan 5 elemen

echo $macam2[0]; // Mengakses elemen dengan index 0 (121)
echo "<br>";    // Baris baru
echo $macam2[1]; // Mengakses elemen dengan index 1 (Joko)
echo "<br>";    // Baris baru
echo $macam2[3]; // Mengakses elemen dengan index 3 (Belajar PHP)
echo "<br>";    // Baris baru
echo $macam2[2]; // Mengakses elemen dengan index 2 (44.99)
echo "<br>";    // Baris baru
echo $macam2[4]; // Mengakses elemen dengan index 4 (true, yang dalam output menjadi 1)



$macam2 = array(121, "Joko", 44.99, "Belajar PHP"); // Mendefinisikan array dengan 4 elemen

$macam2[4] = "Duniailkom"; // Menambahkan elemen baru dengan index 4
$macam2[5] = 212;         // Menambahkan elemen baru dengan index 5
$macam2[6] = 3.14;        // Menambahkan elemen baru dengan index 6

echo "<pre>";
var_dump($macam2); // Menampilkan struktur dan nilai array
echo "</pre>";



$macam2 = array(121, "Joko", 44.99, "Belajar PHP"); // Mendefinisikan array dengan 4 elemen

$macam2[] = "Duniailkom"; // Menambahkan elemen baru ke index 4
$macam2[] = 212;         // Menambahkan elemen baru ke index 5
$macam2[] = 3.14;        // Menambahkan elemen baru ke index 6

echo "<pre>";
var_dump($macam2); // Menampilkan struktur dan nilai array
echo "</pre>";


$macam2 = array(121, "Joko", 44.99, "Belajar PHP"); // Mendefinisikan array dengan 4 elemen

$macam2[10] = "Duniailkom"; // Menetapkan elemen baru dengan index 10
$macam2[100] = 212;        // Menetapkan elemen baru dengan index 100
$macam2[1080] = 3.14;      // Menetapkan elemen baru dengan index 1080

echo "<pre>";
var_dump($macam2); // Menampilkan struktur dan nilai array
echo "</pre>";




// Mendefinisikan array dengan nama $siswa
$siswa = array("Andri", "Joko", "Sukma", "Rina", "Sari");

// Menampilkan elemen dengan indeks 1 dari array $siswa
echo $siswa[1]; // Output: Joko
echo "<br>"; // Baris baru untuk pemisah

// Menampilkan elemen dengan indeks 2 dari array $siswa
echo $siswa[2]; // Output: Sukma
echo "<br>"; // Baris baru untuk pemisah

// Menampilkan teks dengan elemen pertama dari array $siswa
echo "Murid itu bernama $siswa[0]"; // Output: Murid itu bernama Andri



// Mendefinisikan array dengan nama $macam2
$macam2 = array(121, "Joko", 44.99, "Belajar PHP", true);

// Menampilkan elemen dengan indeks 0
echo $macam2[0]; // Output: 121
echo "<br>"; // Baris baru untuk pemisah

// Menampilkan elemen dengan indeks 1
echo $macam2[1]; // Output: Joko
echo "<br>"; // Baris baru untuk pemisah

// Menampilkan elemen dengan indeks 2
echo $macam2[2]; // Output: 44.99
echo "<br>"; // Baris baru untuk pemisah

// Menampilkan elemen dengan indeks 3
echo $macam2[3]; // Output: Belajar PHP
echo "<br>"; // Baris baru untuk pemisah

// Menampilkan elemen dengan indeks 4
echo $macam2[4]; // Output: 1 (boolean true)



$siswa = [
    "satu" => "Andri",
    "dua" => "Joko",
    "tiga" => "Sukma",
    "empat" => "Rina"
];

echo $siswa["empat"]; // Output: Rina
echo "<br>"; // Baris baru untuk pemisah
echo $siswa["dua"];  // Output: Joko




$siswa = [
    "satu" => "Andri",
    "dua" => "Joko",
    "tiga" => "Sukma"
];

echo "<pre>";
print_r($siswa); // Menampilkan seluruh array asosiatif
echo "</pre>";



$sassoc = [
    "satu" => 18000,
    "dua" => 15000,
    "tiga" => 20000
];

// Menambahkan elemen baru ke dalam array
$sassoc["empat"] = 22000;

echo "<pre>";
print_r($sassoc); // Menampilkan seluruh array asosiatif
echo "</pre>";



// Mendefinisikan array asosiatif dengan berbagai key dan value
$assoc = [
    "satu" => "10000",
    "dua" => "Duniailkom",
    4 => "Belajar PHP",
    1000 => "Jadi programmer"
];

// Menambahkan elemen baru ke dalam array
$assoc["baru"] = "Data Baru";
$assoc[99] = "Sembilan puluh sembilan";
$assoc[] = "Ini akan pakai index berapa?";
$assoc[] = 123456;

echo "<pre>";
print_r($assoc); // Menampilkan seluruh array asosiatif
echo "</pre>";



// Mendefinisikan array multidimensi dengan beberapa kelas dan siswanya
$siswa = [
    "kelas_x" => ["Santi", "Yanto", "Reza"],
    "kelas_xi" => ["Tia", "Siska", "Nova"],
    "kelas_xii" => ["Robert", "Rudi", "Alex"]
];

// Mengakses elemen di kelas xi, siswa pertama
echo $siswa["kelas_xi"][0]; // Output: Tia
echo "<br>"; // Baris baru untuk pemisah

// Mengakses elemen di kelas xii, siswa ketiga
echo $siswa["kelas_xii"][2]; // Output: Alex
echo "<br>"; // Baris baru untuk pemisah

// Mengakses elemen di kelas x, siswa kedua
echo $siswa["kelas_x"][1]; // Output: Yanto



$koordinat = [
    [
        ["A"], ["B"]
    ],
    [
        ["C"], ["D"]
    ]
];

echo $koordinat[0][0][0]; // Output: A
echo "<br>";

echo $koordinat[0][1][0]; // Output: B
echo "<br>";

echo $koordinat[1][0][0]; // Output: C
echo "<br>";

echo $koordinat[1][1][0]; // Output: D



$siswa = array(
    "satu" => "Andri",
    "dua" => "Joko",
    "tiga" => "Sukma",
    "empat" => "Rina"
);

echo $siswa["dua"]; // Output: Joko
echo "<br>";



$macam2 = array(121, "Joko", 44.99, "Belajar PHP");
$macam2[] = "Duniailkom"; // Menambahkan elemen ke array
$macam2[] = 212; // Menambahkan elemen ke array
$macam2[] = 3.14; // Menambahkan elemen ke array

unset($macam2[0]); // Menghapus elemen dengan index 0
unset($macam2[2]); // Menghapus elemen dengan index 2
unset($macam2[3]); // Menghapus elemen dengan index 3

echo "<pre>";
var_dump($macam2);
echo "</pre>";



$koordinat = array(
    array(8, 2),
    array(2, 4),
    array(1, 7)
);

echo $koordinat[0][0]; // Output: 8
echo "<br>";

echo $koordinat[0][1]; // Output: 2
echo "<br>";

echo $koordinat[2][1]; // Output: 7
echo "<br>";
?>
