<?php
@session_start();
include("../path.php"); 
include(ROOT_PATH.'/db/conn.php');

$nama=$_POST['nama'];
$password1=md5($_POST['password1']);
$password2=md5($_POST['password2']);
$username=$_POST['username'];
$level=$_POST['level'];


$user=mysqli_query($conn,"SELECT id_pendaftar from pendaftar where id_pendaftar='$username'");

$jlh_user=mysqli_num_rows($user);


if($jlh_user>1)
{

?>
	<script type="text/javascript">
		alert("Maaf username sudah ada");
		window.location="register.php";
	</script>

<?php
}
else
{
    if($password1 == $password2)
    {
	$sql ="INSERT into pendaftar(id_pendaftar,nama) values('".$username."','".$nama."')";
	$sql2="INSERT into tabel_user(username,`password`,`level`,kode_pendaftar) values('".$username."','".$password1."','".$level."','".$username."')";
	mysqli_query($conn,$sql);
	mysqli_query($conn,$sql2);
	echo '<script language="javascript">  
 window.location="../login/login.php?page=simpan";
 </script>';
    }else{
        echo '<script type="text/javascript">
		    alert("Maaf Password yang Anda Masukkan tidak sama");
		    window.location="register.php";
	    </script>';
    }
}
?>
 