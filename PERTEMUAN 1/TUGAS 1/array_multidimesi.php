<?php
$data = [
  "Nama" => ["Jeruk", "Nanas", "Alpuket", "Semangka", "anggur"],
  "Warna" => ["Orange", "Kuning", "Hijau", "Merah", "Ungu"],
  "Stok" => [50, 34, 30, 15, 20],
  "Harga" => [20000, 25000, 15000, 30000, 35000],
  "Deskripsi" => ["buah yang memiliki air banyak dan rasanya segar", "buah yang tidak ada bijinya", "buah yang memiliki biji bulat besar", "buah yang bentuknya besar dengan biji kecil yang bisa di makan", "buah yang rasanya manis asem segar"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Data Buah</title>
  <style>
    body {
      background: #0081C9;
      
    }
    h1, h3 {
      text-align : center;
    }
    table {
      Background-color : #FFC93C;
      padding :5px;
      border-radius : 10px;
      border-right :3px black;
    }
    td {
      background-color : #FCFFE7;
      padding : 5px;
    }
  </style>
</head>

<body>
  <h1>Tabel Data Buah</h1>
  <hr>
  <table border="3" align="center">
    <tr>
      <?php
      foreach ($data as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      ?> 
    </tr>
    <?php
    for ($i=0; $i < 5; $i++) { 
        echo "<tr>";
        echo "<td>" .$data["Nama"][$i] . "</td>";
        echo "<td>" .$data["Warna"][$i] . "</td>";
        echo "<td>" .$data["Stok"][$i] . "</td>";
        echo "<td>" .$data["Harga"][$i] . "</td>";
        echo "<td>" .$data["Deskripsi"][$i] . "</td>";
        echo "</tr>";
    }
    ?>
  </table>
  <h3>Kuyyy di borong.....</h3>
</body>

</html>