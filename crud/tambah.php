<?php
include_once 'koneksi.php';
if (isset($_POST['tambah'])) {
	$title	=$mysqli->real_escape_string($_POST['title']);
	$content	=$mysqli->real_escape_string($_POST['content']);
	$tanggal	=$mysqli->real_escape_string($_POST['tanggal']);

	$query 		=$mysqli->query("insert into artikel(id,title,content,tanggal) values (NULL,'$title','$content','$tanggal')");


	if ($query === TRUE) {
		header("location:home.php");

	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>tambah data </title>
</head>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
<center>
	<div id="container">
		<h1>Form Tambah Data</h1>
		<div id="content">
	<form action="" method="POST">
		<table>
			<tr>
				<td>title</td>
				<td><input type="text" name="title"></td>
			</tr>
			<tr>
				<td>content</td>
				<td><textarea name="content"></textarea></td>
			</tr>
			<tr>
				<td>tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="tambah">TAMBAH</button>
					<button type="reset">RESET</button>
					<button><a href="home.php" type="back">Back</a></button>
				</td>
			</tr>
		</table>
	</form>
</div>
</div>
</center>
</body>
</html>