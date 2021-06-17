<?php include("../path.php"); ?>
<!DOCTYPE html>
<?php

if(@$_SESSION['admin']){
    header('location:../index.php');
}else if(@$_SESSION['user']){
    header('location:../index.php');
}else{
    session_start();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Balerina Photo</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   
<link rel="stylesheet" href="sweetalert2.min.css">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<?php
        if(@$_GET['page']=="simpan"){
            echo 
            '<script type="text/javascript">
                alert("Register Berhasil \n Silahkan Anda Login !");
            </script>';
        }
    ?>
<img src="../assets/img/svg.png" alt="wave" class="wave">
    <div class="container">
        <div class="img">
            <img src="../assets/img/camera.svg" alt="">
        </div>
        <div class="login-container">
            <form action="login_proses.php" method="POST">
                <h2>Selamat datang di Balerina Photo</h2>
                <p>Gak punya akun? Buruan <a href="<?php echo BASE_URL.'/register/register.php'?>">Daftar</a>!</p>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="">
                        <h5>Username</h5>
                        <input type="text" class="input" name="username">
                    </div>
                </div>
                <div class="input-div two  ">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
             
                <input type="submit" class="btn" value="Login">
               
            </form>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        const params = new URLSearchParams(window.location.search)
        let pesan = params.get('pesan');

        if (pesan == 'true') {
            Swal.fire({
                title: 'Berhasil',
                text: 'Proses berhasil dilakukan',
                icon: 'success',
            })
        } else if (pesan == 'false') {
            Swal.fire({
                title: 'Error',
                text: 'Username atau Password tidak sesuai !',
                icon: 'error',
            })
        } else {
            ''
        }
    </script>
</body>
</html>