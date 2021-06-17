<?php
	session_start();
  include(ROOT_PATH.'/db/conn.php');
	if($_SESSION['admin']){
?>
<nav>
     <div class="logo">
      <p>Balerina Studio</p> 
     </div>
     <ul class="nav-link">
     <?php
    $user=mysqli_query($conn,"SELECT*from pendaftar where id_pendaftar='$_SESSION[admin]'");
    $da=mysqli_fetch_array($user);
?>

      <li><a class="garis"  href="#">Halloo <?php echo $da['nama'];?> !</a></li>
      <li><a class="garis" href="<?php echo BASE_URL.'/admin/beranda.php'?>">ADMIN PANEL</a></li>
       <li><a class="garis"  href="<?php echo BASE_URL.'/admin/show/index_admin.php'?>">HOME</a></li>
       <li><a class="garis" href="<?php echo BASE_URL.'/admin/show/gallery_admin.php'?>">GALLERY</a></li>
       <li><a class="garis"href="<?php echo BASE_URL.'/logout.php?page=admin'?>">LOGOUT</a></li>

     </ul>
     <div class="burger">
       <div class="first"></div>
       <div class="second"></div>
       <div class="third"></div>
     </div>
  </nav>
  <?php
}
else
{
	header('location:../login/login.php');
}
?>