<?php include("../../path.php"); 
include(ROOT_PATH . "/db/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Balerina Photo</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="icon" href="../../assets/img/logotitle.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
  <div class="overflow">
  <?php include(ROOT_PATH."/include/navbaradmin.php"); ?>
  <div class="bottomofnav">
  <h1 class="garisfirstpage">Welcome to our gallery</h1>
  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem debitis molestias inventore odio dolor, sequi omnis illo mollitia est rerum, ab eum, harum dignissimos tenetur et optio porro modi eos. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste ad suscipit tenetur, neque omnis totam praesentium numquam? Autem magnam atque amet incidunt? Fugiat quod corporis omnis excepturi, ullam saepe voluptates?</p>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="column">
      <?php
      $query = "SELECT * FROM tabel_gambar ";
        $data = mysqli_query($conn,$query);

        while($dbdata = mysqli_fetch_array($data)){
          ?>
    <a href="<?php echo '../../assets/imggallery/'.$dbdata['foto'];?>" class="fancybox" data-fancybox="gallery1">
        <img src="<?php echo '../../assets/imggallery/'.$dbdata['foto']?>" />
    </a>
    <?php } ?>
       </div>


       
      
     
    </div>
    <div id="BtnTop"><a href="#top"><i class="fas fa-arrow-up"></i></a></div>
  </div>
  <?php include(ROOT_PATH."/include/footer.php"); ?>
</div>
      <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script src="../../assets/js/script.js"></script>
</body>

</html>
