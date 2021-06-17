<?php 
include("../path.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/beranda.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,200;1,400&display=swap" rel="stylesheet">   
    <title>Balerina Photo - Admin Panel</title>
</head>
<body>
<div class="overflow">
<?php include(ROOT_PATH."/include/navbaradmin.php"); ?>
<?php
    $user=mysqli_query($conn,"SELECT*from pendaftar where id_pendaftar='$_SESSION[admin]'");
    $da=mysqli_fetch_array($user);
?>
<h3>Hallo "<?php echo $da['nama'];?>" Selamat datang di Admin Panel Balerina Studio</h3>
    <div class="containerisi">
    <div class="pilihan">
    <button type="button" class="btn btn-primary"><a href="read_admin.php">Kelola User</a></button>
    <button type="button" class="btn btn-primary"><a href="gallery/read.php">Kelola Gallery Photo</a></button>
    </div>
    </div>
    <?php include(ROOT_PATH."/include/footer.php"); ?>
</div>
    <script src="../assets/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script>
        const params = new URLSearchParams(window.location.search)
        let pesan = params.get('pesan');

        if (pesan == 'true') {
            Swal.fire({
                title: 'Anda Berhasil Login',
                text: 'Selamat Datang "<?= $da['nama']?>" \n Anda Login sebagai Admin.',
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