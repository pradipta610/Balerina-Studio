<?php
include("../../path.php");
include(ROOT_PATH.'/db/conn.php');
include(ROOT_PATH.'/admin/gallery/create.php');

$id = $_POST['id_foto'];
$namafoto = $_POST['name'];
$username = $_SESSION['admin'];

if(empty($_FILES['foto']['name'])){
    header("location:update.php?pesan=false");
}else{
    $nama_foto=$namafoto. ".jpg";
    $file = $_FILES['foto']['name'];
    $file_tmp =$_FILES['foto']['tmp_name'];
    $pecah = explode('.',$file);
    $tipe_file = $pecah[1];
    $ekstensi = array('jpg', 'png', 'gif');

    if(in_array($tipe_file, $ekstensi)){
    $query = "SELECT * FROM tabel_gambar WHERE id_foto='$id'";
    $data = mysqli_query($conn,$query);
    $link = mysqli_fetch_array($data);
    unlink('../../assets/imggallery/' . $link['foto']);
    move_uploaded_file($file_tmp , '../../assets/imggallery/' . $nama_foto);
    $query ="UPDATE `tabel_gambar` SET `foto` = '$nama_foto' ,`username_gambar`='$username'WHERE `tabel_gambar`.`id_foto` = '$id'";
    

    
    }else{
    header("location:update.php?pesan=tipedata");
    }
}
mysqli_query($conn,$query);
header("location:read.php?pesan=true");