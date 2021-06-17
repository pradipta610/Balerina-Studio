<?php 
include("../path.php");
include(ROOT_PATH.'/db/conn.php');

$nama=$_POST['nama'];
$username = $_POST["username"];
$password = md5($_POST["password"]);
$repassword = md5($_POST["repassword"]);
$level=$_POST['level'];

if(empty($username && $password)){
    header("location:create_admin.php?pesan=false");
}else{
    $queryfind_id = "SELECT username FROM tabel_user WHERE username = '$username'";
    $querydata_id = mysqli_query($conn, $queryfind_id);
    $find_id = mysqli_num_rows($querydata_id);
    if($find_id >0){
        header("location:create_admin.php?pesan=username");
    }else{
        if($password != $repassword){
            header("location:create_admin.php?pesan=password");
        }else{
            $sql ="INSERT into pendaftar(id_pendaftar,nama) values('".$username."','".$nama."')";
	$sql2="INSERT into tabel_user(username,`password`,`level`,kode_pendaftar) values('".$username."','".$password."','".$level."','".$username."')";
	mysqli_query($conn,$sql);
	mysqli_query($conn,$sql2);
            header("location:read_admin.php?pesan=true");
        }
    }

  
}


?>
 
