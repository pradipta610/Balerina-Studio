<?php
include("../path.php");
include(ROOT_PATH.'/db/conn.php');


$id = $_POST['id_user'];
$password = md5($_POST['password']);
$repassword = md5($_POST['repassword']);

if(empty($password)){
    header("location:update_admin.php?pesan=false&id_edit=$id;");
}else if($password != $repassword){
    header("location:update_admin.php?pesan=password&id_edit=$id;");
}else{
    $query="UPDATE `tabel_user` SET `password`='$password' WHERE `id_user` = '$id'";
    mysqli_query($conn,$query);
    header("location:read_admin.php?pesan=true");

}