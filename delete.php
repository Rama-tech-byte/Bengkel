<?php

include "connection.php";
$id1 = $_REQUEST['id_del'];
$query1 = "DELETE FROM markers WHERE id = '".$id1."' ";
$sql2 = mysqli_query($con,$query1);
header('location: http://localhost/Bengkel/index.php');

?>