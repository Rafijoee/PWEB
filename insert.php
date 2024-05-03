<?php
include('koneksi.php');

$owner = $_POST['owner'];
$no_hanphone = $_POST['no_hanphone'];

$insert = mysqli_query($connect, "INSERT INTO kontak SET owner='$owner', no_handphone='$no_hanphone'");

if($insert)
    header('Location: kontak.php');
else
    echo 'Input Data Eror !';
?>
