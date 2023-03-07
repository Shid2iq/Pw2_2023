<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    body {
      background: #0081C9;
      
    }
    h1, h3 {
      text-align : center;
	  padding : 5px;
    }
    table {
      Background-color : #FFC93C;
      padding :5px;
      border-radius : 10px;
    }
    td {
      background-color : #FCFFE7;
      padding : 5px;
	  
    }
	th {
		background-color :  #FFC93C;
	}
  </style>
</head>
<body>
	<div class="container">
		<h1>Data Pendaftar</h1>
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Raffikri Mawlana</td>
					<td>fikri@gmail.com</td>
					<td>Depok</td>
					<td>0819486662</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Rizky Maulana Ishaq</td>
					<td>Maul@gmail.com</td>
					<td>Lenteng agung</td>
					<td>08194658452</td>
				</tr>

				<?php
				if(isset($_POST['submit'])) {
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */
                  $nama = $_POST ['nama'];
                  $email = $_POST ['email'];
                  $alamat = $_POST ['alamat'];
                  $telpon = $_POST ['telpon'];

				  
                  echo "<tr>";
                  echo "<td>" . "3" . "</td>";
                  echo "<td>" . $nama . "</td>";
                  echo "<td>" . $email . "</td>";
                  echo "<td>" . $alamat . "</td>";
                  echo "<td>" . $telpon . "</td>";
                  echo "</tr>";
				  }
				?>

			</tbody>
		</table>
	</div>
</body>
</html>