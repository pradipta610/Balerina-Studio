<?php include("path.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balerina Photo</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="icon" href="/assets/img/logotitle.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>
  <div class="overflow">
  <?php include(ROOT_PATH."/include/navbar.php"); ?>
  <?php
    $user=mysqli_query($conn,"SELECT*from pendaftar where id_pendaftar='$_SESSION[user]'");
    $da=mysqli_fetch_array($user);
?>
<div class="background">
  <p>Create Your Timeless Image</p>
</div>


<div class="pengenalan">
  <h1 class="garisfirstpage">About Us</h1>
    <img src="/assets/img/7.jpg" alt="">
  
  <div class="text">
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Commodi qui, veniam obcaecati similique vero in tempore reprehenderit quisquam facere repellendus suscipit eaque eum perferendis fuga voluptates quo nihil tempora optio!</p>
  </div>
  </div> 
  
<div class="firstpage">
<h1 class="garisfirstpage">Welcome to our gallery</h1>
<div id="carouselExampleIndicators" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active"data-bs-interval="2000">
      <img src="assets/img/iu1.jpg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item"data-bs-interval="2000">
      <img src="assets/img/iu2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item"data-bs-interval="2000">
      <img src="assets/img/iu3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>


<div class="iframe">
  <h1 class="garisfirstpage">Find us on Maps</h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126194.95405776262!2d115.14073666422694!3d-8.730205377333094!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240f24881c587%3A0xe8413f111e0aa096!2sITB%20STIKOM%20Bali!5e0!3m2!1sid!2sid!4v1621952670082!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
  <div id="BtnTop"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  <?php include(ROOT_PATH."/include/footer.php"); ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="assets/js/script.js"></script>
      <script>
        const params = new URLSearchParams(window.location.search)
        let pesan = params.get('pesan');

        if (pesan == 'true') {
            Swal.fire({
                title: 'Anda Berhasil Login',
                text: 'Selamat Datang "<?= $da['nama']?>" \n Anda Login sebagai User.',
                icon: 'info',
            })
        } else if (pesan == 'false') {
            Swal.fire({
                title: 'Error',
                text: 'Proses Gagal Dilakukan!',
                icon: 'error',
            })
        } else {
            ''
        }
    </script>
</body>

</html>
