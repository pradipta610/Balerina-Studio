<?php
	session_start();
  include(ROOT_PATH.'/db/conn.php');
	if($_SESSION['admin']){

    $user=mysqli_query($conn,"SELECT*from pendaftar where id_pendaftar='$_SESSION[admin]'");
    $da=mysqli_fetch_array($user);

}
else
{
	header('location:../login/login.php');
}
?>