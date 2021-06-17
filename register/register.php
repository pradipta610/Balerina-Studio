<?php include("../path.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Balerina Photo</title>
    <link rel="stylesheet" href="../assets/css/login.css">
    <link rel="stylesheet" href="../assets/css/register.css">
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
<link rel="stylesheet" href="sweetalert2.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
</head>
<body>
<img src="../assets/img/svg.png" alt="wave" class="wave">
    <div class="container">
        <div class="img">
            <img src="../assets/img/camera.svg" alt="">
        </div>
        <div class="login-container">
            <form action="proses_register.php" method="POST">
                <h2>Selamat datang di Balerina Photo</h2>
                <p>Sudah punya akun? Langsung <a href="<?php echo BASE_URL.'/login/login.php'?>">Masuk</a>!</p>
                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="">
                        <h5>Nama</h5>
                        <input type="text" class="input" name="nama">
                    </div>
                </div>

                <div class="input-div one ">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="">
                        <h5>Username</h5>
                        <input type="text" class="input"  name="username">
                    </div>
                </div>
               
                <div class="input-div two  ">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password1">
                    </div>
                </div>
                <div class="input-div two  ">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="">
                        <h5>Re-Password</h5>
                        <input type="password" class="input" name="password2">
                    </div>
                </div>
                <select name="level" style="width:100%; margin-bottom:20px; margin-top:0px;" class="form-control show-tick" required>
                            <option value="" selected="">--Pilih User--</option>            
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                             
                        </select>
                <input type="submit" class="btn" value="Register">
                
            </form>
            
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>