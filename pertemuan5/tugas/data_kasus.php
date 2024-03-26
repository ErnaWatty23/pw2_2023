<?php

require_once 'class_kasus.php';

// Membuat objek
$apel = new Apple("Apel", "Merah", 10);
$jeruk = new Orange("Jeruk", "Oren", 8);

// Mendapatkan informasi
$apel->getInfo();
echo "<br>";
$jeruk->getInfo();

?>
