<?php

include('koneksi.php');

$id = $_GET('id');

$delete = mysqli_query($connect, "DELETE FROM kontak WHERE id=$id");

if($delete)
	header('Location : kontak.php'); 
else
	echo 'Delete data gagal';