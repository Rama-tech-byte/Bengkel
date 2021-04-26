<?php
include "connection.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$longitude = $_POST['lng'];
$latitude = $_POST['lat'];
$keterangan = $_POST['Keterangan'];

$query="INSERT INTO markers (id, nama, alamat, telepon, longitude, latitude, keterangan)
VALUES('".$id."', '".$nama."', '".$alamat."','".$telepon."', '".$longitude."','".$latitude."', '".$keterangan."')";
$result = $con->query($query);
header('location: http://localhost/Bengkel/index.php');
die();
?>