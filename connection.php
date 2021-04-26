<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "bengkel";

$con = mysqli_connect($server, $username, $password);
$db_ = mysqli_select_db($con, $db);

if($con -> connect_errno)
{
    echo "Koneksi error";
    exit();
}

?>
