<?php
include('koneksi.php');

$id = $_POST['id'];
$owner = $_POST['owner'];
$no_hanphone = $_POST['no_hanphone'];


$update = mysqli_query($connect,"UPDATE kontak SET owner='$nama', no_handphone='$no_handphone' WHERE id='$id' ");

if($update) 
    header('Location:kontak.php'); 
else
    echo 'Input data gagal';
?>