<?php
include("../path.php");
include(ROOT_PATH.'/db/conn.php');


$idadmin = $_GET['id'];

$query = "DELETE FROM `tabel_user` WHERE `tabel_user`.`id_user` = $idadmin ";
$query1 = "DELETE FROM `pendaftar` WHERE `pendaftar`.`id` = $idadmin ";
mysqli_query($conn,$query);
mysqli_query($conn,$query1);

header("location:read_admin.php?pesan=true");


