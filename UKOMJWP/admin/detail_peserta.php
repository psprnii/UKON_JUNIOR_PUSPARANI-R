<?php 
	include 'koneksi.php';
	session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Peserta Sertifikasi Ukom</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			width: 80%;
			text-align: center;
			margin: auto;
		}

		.table1{
			font-family: sans-serif;
			border-collapse: collapse;
			width: 100%;
			margin: auto;
		}

		.table1 tr th {
			background: #35A9DB;
			color: #fff;
			text-align: center;
			padding: 20px 8px;
		}

		.table1, th, td {
			text-align: center;
			padding: 20px 8px;
			border: 1px solid lightblue;
		}

		.btn-edit {
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn-hapus{
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn {
			background: darkblue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
			float: left;
		}

		a:hover{
			background: red;
		}

		.table1 tr:hover {
			background-color: lightblue;
		}


	</style>
</head>
<body>
	<h2>DETAIL PESERTA SERTIFIKASI UKOM</h2>
	<hr>
	<table class="table1">
		
		
		<tbody>
			<?php
			 
			$id = $_GET['Id_peserta'];
			$data = mysqli_query($koneksi,"select * from tb_peserta where id_peserta='$id'");
			 $d=mysqli_fetch_array($data);
			 	# code...
			 ?>
		<tr>
			<td>KODE SKEMA</td>
			<td><?php echo $d['Kd_skema'];?></td>
		</tr>
		<tr>
			<td>NAMA PESERTA</td>
			<td><?php echo $d['Nm_peserta'];?></td>
		</tr>
		<tr>
			<td>JENIS KELAMIN</td>
			<td><?php echo $d['Jekel'];?></td>
		</tr>
		<tr>
			<td>ALAMAT</td>	
			<td><?php echo $d['Alamat'];?></td>
		</tr>
		<tr>
			<td>NO HP</td>
			<td><?php echo $d['No_hp'];?></td>
		</tr>	
		
		</tbody>
	</table>
	<a href="data_pendaftar.php" class="btn">KEMBALI</a>
</body>
</html>