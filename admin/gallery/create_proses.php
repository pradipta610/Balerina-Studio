<?php 
include("../../path.php");
include(ROOT_PATH.'/db/conn.php');
include(ROOT_PATH.'/admin/gallery/create.php');
$username = $_SESSION['admin'];
$namafoto = $_POST['name'];

if(empty($_FILES['foto']['name'])){
    header("location:create.php?pesan=false");
}else{
    $nama_foto=$namafoto. ".jpg";
    $file = $_FILES['foto']['name'];
    $pecah = explode('.',$file);
    $tipe_file = $pecah[1];
    $ekstensi = array('jpg', 'png', 'gif');

    if(in_array($tipe_file, $ekstensi)){
    $file_tmp =$_FILES['foto']['tmp_name'];
    move_uploaded_file($file_tmp , '../../assets/imggallery/' . $nama_foto);
    $query ="INSERT INTO tabel_gambar (`foto`,`username_gambar`)VALUES ('$nama_foto','$username')";
    mysqli_query($conn,$query);

    header("location:read.php?pesan=true");
    }else{
    header("location:create.php?pesan=tipedata");
    }
}



?>
 
