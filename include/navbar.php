<?php
	session_start();
  include(ROOT_PATH.'/db/conn.php');
	if($_SESSION['user']){
?>
<nav>
     <div class="logo">
      <p>Balerina Studio</p> 
     </div>
     <ul class="nav-link">
     <?php
    $user=mysqli_query($conn,"select*from pendaftar where id_pendaftar='$_SESSION[user]'");
    $da=mysqli_fetch_array($user);
?>

      <li><a class="garis"  href="#">Hallo <?php echo $da['nama'];?> !</a></li>
       <li><a class="garis"  href="<?php echo BASE_URL.'/index_user.php'?>">HOME</a></li>
       <li><a class="garis" href="<?php echo BASE_URL.'/gallery.php'?>">GALLERY</a></li>
       <li><a class="garis"href="<?php echo BASE_URL.'/logout.php?page=user'?>">LOGOUT</a></li>

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