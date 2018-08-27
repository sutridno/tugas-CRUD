<?php
include_once 'koneksi.php';


?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
<title>tugas crud</title>
</head>
<body>
	<nav>
		
	</nav>
<div id="container">
<header>
<h1 style="font-family:cursive; comic sans">Tugas CRUD</h1>
</header>
<br>

<div id="content">
<table border="1">
<thead>
	<h1 style="font-family:cursive; comic sans">Data Buku</h1>
<tr>
	<td>judul</td>
	<td>tanggal</td>
	<td>aksi</td>
</tr>
			<?php
				$query	=$mysqli->query("select * from artikel");
				while($data=mysqli_fetch_array($query)) {
			?>
			<tr>
				<td><?php echo $data['title']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $data['id']; ?>" >edit </a>
					|
					<a href="hapus.php?id=<?php echo $data['id']; ?>" >hapus </a>


				</td>
			</tr>
		<?php } ?>
		</table>
<div class="a">
<a href="tambah.php" class="btn btn-default">Tambah Baru</a>
</div>
</thead>
</table>
</div>


<div id="sidebar">
	<h2>Nama : Sutrisno</h2>
	<h2>NIM : 311620793</h2>
	<h2>Kelas : TI.16.B.2</h2>
	<img src="foto.jpg" width="150px">
</div>
</body>
</html>