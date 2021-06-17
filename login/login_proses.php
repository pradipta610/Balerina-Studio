<?php
SESSION_START();
include("../path.php"); 
include(ROOT_PATH.'/db/conn.php');

if (isset($_POST['username']))
{
	$username = $_POST['username'];
	$password = md5($_POST["password"]);
   	$isi_form="username=$username";
}

if($username!='' && $password!='')
{				
	$sql_user=mysqli_query($conn, "select*from tabel_user");
	$data_user=mysqli_fetch_array($sql_user);
						
						
	$sql=mysqli_query($conn, "select*from tabel_user, pendaftar where username='$username' and password='$password' and kode_pendaftar=id_pendaftar");
	$data=mysqli_fetch_array($sql);
	$cek=mysqli_num_rows($sql);

	if($cek >= 1 ){
?>
<?php
			
		if($data['level']=="admin")
		{

			$_SESSION['admin']=$data['kode_pendaftar'];
?>
		<script type="text/javascript">  
			window.location="../admin/beranda.php?pesan=true";  
 		</script>;  
<?php				
        }
        else
        {
            $_SESSION['user']=$data['kode_pendaftar'];
?>
		<script type="text/javascript"> 
			window.location="../index_user.php?pesan=true";  
         </script>;
         <?php
        }							
	}
	else
	{
		if($username != $data_user['username'])
		{
								
?>
			<script type="text/javascript">
	        	window.location="login.php?notif=username&<?php echo $isi_form;?>&pesan=false";
	        </script>
                                
<?php
		}
		else if($password != $data_user['password'])
		{
?>
            <script type="text/javascript">
				window.location="login.php?notif=password&<?php echo $isi_form;?>&pesan=false";
	        </script>
<?php
		}
		else
		{
		?>
			<script type="text/javascript">
				window.location="login.php?notif=password&<?php echo $isi_form;?>&pesan=false";
	        </script>		
		<?php
		}
							
	}
							
}

?>