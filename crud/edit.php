<?php
include_once 'koneksi.php';
if (isset($_POST['edit'])) {
	$id			=$mysqli->real_escape_string($_POST['id']);
	$title		=$mysqli->real_escape_string($_POST['title']);
	$content	=$mysqli->real_escape_string($_POST['content']);
	$tanggal	=$mysqli->real_escape_string($_POST['tanggal']);

	$query 		=$mysqli->query("update artikel set title='$title' ,content='$content',tanggal='$tanggal' where id='$id'");


	if ($query === TRUE) {
		header("location:home.php");

	}
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<title>edit data</title>
</head>
<body>

<center>
	<div id="container">
		<h1>Form Edit Data</h1>
		<div id="content">
	<form action="" method="post">
		
		<table>
			<?php
			$query	=$mysqli->query("select * from artikel where id='$_GET[id]'");
			$data	=mysqli_fetch_array($query);
			?>
			<tr>
				<td>id</td>
				<td><input type="text" name="id" value="<?php echo $data['id']; ?>" readonly"></td>
			</tr>
			<tr>
				<td>title</td>
				<td><input type="text" name="title" value="<?php echo $data['title']; ?>"></td>
			</tr>
			<tr>
				<td>content</td>
				<td><textarea name="content"><?php echo $data['content']; ?></textarea></td>
			</tr>
			<tr>
				<td>tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td colspan="2">
					<button type="submit" name="edit">EDIT</button>
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