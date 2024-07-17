<?php
$username = "admin";
$password = "qwerty";

if ($username == "admin" && $password == "qwerty") {
    echo "Username dan password sesuai, hak akses diberikan.";
} elseif ($username == "admin" && $password != "qwerty") {
    echo "Username sesuai, password tidak sesuai!";
} elseif ($username != "admin" && $password == "qwerty") {
    echo "Username tidak sesuai, password sesuai!";
} else {
    echo "Nama dan password tidak sesuai!";
}



$username = "admin";
$password = "qwerty";

if ($username == "admin") {
    if ($password == "qwerty") {
        echo "Username dan password sesuai, hak akses diberikan.";
    } else {
        echo "Username sesuai, password tidak sesuai!";
    }
} else {
    if ($password == "qwerty") {
        echo "Username tidak sesuai, password sesuai!";
    } else {
        echo "Nama dan password tidak sesuai!";
    }
}
?>

