<?php
include("../../path.php");
include(ROOT_PATH.'/db/conn.php');


$idfoto = $_GET['id'];
$query1 = "SELECT * FROM tabel_gambar WHERE id_foto='$idfoto'";
    $data = mysqli_query($conn,$query1);
    $link = mysqli_fetch_array($data);
unlink('../../assets/imggallery/' . $link['foto']);
$query = "DELETE FROM `tabel_gambar` WHERE `tabel_gambar`.`id_foto` = $idfoto ";
mysqli_query($conn,$query);

header("location:read.php?pesan=true");


