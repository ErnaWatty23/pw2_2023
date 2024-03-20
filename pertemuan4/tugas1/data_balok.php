<?php 
include 'class_balok.php'; 
$balok1 = new Balok(29, 16, 7);
$balok2 = new Balok(10, 7, 5);
$balok3 = new Balok(8, 10, 4);
$balok4 = new Balok(15, 8, 3);


echo "Object 1: <br>";
echo "Luas: " . $balok1->getLuas() . "<br>"; 
echo "Keliling: " . $balok1->getKeliling() . "<br>"; 
echo "Volume: " . $balok1->getVolume() . "<br>"; 
echo "<br>";

echo "Object 2: <br>";
echo "Luas: " . $balok2->getLuas() . "<br>"; 
echo "Keliling: " . $balok2->getKeliling() . "<br>"; 
echo "Volume: " . $balok2->getVolume() . "<br>"; 
echo "<br>";

echo "Object 3: <br>";
echo "Luas: " . $balok3->getLuas() . "<br>"; 
echo "Keliling: " . $balok3->getKeliling() . "<br>"; 
echo "Volume: " . $balok3->getVolume() . "<br>"; 
echo "<br>";

echo "Object 4: <br>";
echo "Luas: " . $balok4->getLuas() . "<br>"; 
echo "Keliling: " . $balok4->getKeliling() . "<br>"; 
echo "Volume: " . $balok4->getVolume(); 
?>