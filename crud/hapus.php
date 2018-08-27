<?php

include_once 'koneksi.php';

$query = $mysqli->query("DELETE FROM artikel where id='$_GET[id]'");

header("location:home.php");
