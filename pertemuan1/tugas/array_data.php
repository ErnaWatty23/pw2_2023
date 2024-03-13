<?php
$m_fruits = [
  [ "ID" => "1", "Nama" => "manggis", "color" => "ungu", "stock" => 50,  "price" => 17000, "description" => "manggis dengan harga murah tapi kualitas oke"],
 
  [ "ID" => "2", "Nama" => "semangka", "color" => "merah", "stock" => 15, "price" => 15000, "description" => "semangka segar dengan harga murah"],
 
  [ "ID" => "3", "Nama" => "melon", "color" => "hijau", "stock" => 10, "price" => 30000, "description" => "melon manis dan sehat"],
 
  [ "ID" => "4", "Nama" => "alpukat", "color" => "hijau", "stock" => 20, "price" => 25000, "description" => "alpukat segar dan nikmat, cuman 25k perKG"],
 
  [ "ID" => "5", "Nama" => "kelapa", "color" => "hijau", "stock" => 23, "price" => 35000, "description" => "kelapa segar dengan harga yang terjangkau"], 
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
 
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        
        <?php
        foreach ($m_fruits as $fruit) {
          ?>
          <tr>
            <td><?= $fruit["ID"] ?></td> 
            <td><?= $fruit["Nama"] ?></td> 
            <td><?= $fruit["color"] ?></td> 
            <td><?= $fruit["stock"] ?></td> 
            <td><?= $fruit["price"] ?></td> 
            <td><?= $fruit["description"] ?></td> 
          </tr>

      <?php
        } 
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>