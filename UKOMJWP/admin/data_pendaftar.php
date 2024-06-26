<?php 
	include 'koneksi.php';
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pendaftaran Ukom</title>
	<style type="text/css">
		body{
			font-family: sans-serif;
			width: 80%;
			text-align: center;
			margin: auto;
			text-decoration : none;
		}
		header {
			width: 100%;
			margin: auto;
			display: flex;
			line-height: 80px;
			position: sticky;
			top: 0;
			z-index: 1;
		}
		.wrapper {
			width: 100%;
			margin: auto;
			position: relative;
		}
		.menu {
			float: right;
		}
		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
		}
		ul li {
			float: left;
			display: inline;
		}
		ul li a{
			color: #F49D1A;
			font-weight: bold;
			text-align: center;
			padding: 0px 16px 0px 16px;
		}
		ul li a:hover{
			color: red;
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
			color: red;
		}

		.table1 tr:hover {
			background-color: lightblue;
		}


	</style>
</head>
<body>
	<header>
	<div class="wrapper">

	<div class="menu">
		<ul>
			
			<li><strong>Hallo.. <?php echo $_SESSION['username'];?></strong></li>

			<li><a href="logout.php" onclick="return confirm('Konfirmasi logout!')">LOGOUT</a></li>
		</ul>
	</div>
	</div>
	</header>
	<br>
	<h2>DATA PENDAFTARAN UJI KOMPETENSI</h2>
	<?php 
      if (isset($_SESSION['pesan'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
              <?php echo $_SESSION['pesan']; ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        session_destroy();
            }
    ?>
	<hr>
	<table class="table1">
		<thead>
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>TANGGAL LAHIR</th>
			<th>ALAMAT</th><br>
			<th >TAHUN LULUS</th>
			<th>TANGGAL PENDAFTARAN</th>
			<th>ASAL SEKOLAH</th>
			<th>NAMA ORANG TUA</th>
			<th width="200px">ACTION</th>
		</tr>
		</thead>
		<tbody>
			<?php
			 $no = 1;
			 $data = mysqli_query($koneksi, "select * from tb_peserta");
			 while ($d=mysqli_fetch_array($data)) {
			 	# code...
			 ?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama'];?></td>
			<td><?php echo $d['email'];?></td>
			<td><?php echo $d['tgl_lahir'];?></td>
			<td><?php echo $d['alamat'];?></td>
			<td><?php echo $d['tahun_lulus'];?></td>
			<td><?php echo $d['tgl_daftar'];?></td>
			<td><?php echo $d['asal_sekolah'];?></td>
			<td><?php echo $d['nama_orgtua'];?></td>
			<td><a href="detail_peserta.php?id_peserta=<?php echo $d['id_peserta'];?>" class="btn-edit">Detail</a> <a href="delete_peserta.php?id_peserta=<?php echo $d['id_peserta'];?>" onclick="return confirm('Apakah akan menghapus data ini? ')" class="btn-hapus">Hapus</a></td>
		</tr>
	<?php } ?>
		
		</tbody>
	</table>
</body>
</html>