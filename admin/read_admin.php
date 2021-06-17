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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,200;1,400&display=swap" rel="stylesheet">
    <title>Balerina Photo - Tabel Admin</title>
</head>
<body>
<div class="overflow">
<?php include(ROOT_PATH."/include/navbaradmin.php"); ?>
    <h3 align="center">Data Tabel Admin of Balerina Studio</h3>
    <h3 align="center"> </h3>
  
    <div class="containerisi">
    <div class="pilihan">
    <button type="button" class="btn btn-primary"><a href="create_admin.php">Tambah data</a></button>
    <button type="button" class="btn btn-primary"><a href="gallery/read.php">Kelola Gallery Photo</a></button>
    </div>
    <table >
        <tr class="top">
            <th align="center">No</th>
            <th align="center">Username</th>
            <th align="center">Password</th>
            <th align="center">Level</th>
            <th align="center">Action</th>
            
        </tr>

        <?php
        $no=1;
        $query = "SELECT * FROM tabel_user ";
        $data = mysqli_query($conn,$query);

        while($dbdata = mysqli_fetch_array($data)){
            ?>
          <tr>
            <th><?php echo $no++ ;?> </th>
            <th><?php echo $dbdata['username'];?></th>
            <th><?php echo $dbdata['password'];?></th>
            <th><?php echo $dbdata['level'];?></th>
           
            <th><button type="button" class="btn btn-success"><a href="update_admin.php?id_edit=<?php echo $dbdata['id_user']?>">Edit</a> </button>
            <button type="button" class="btn btn-danger"><a href="delete_admin.php?id=<?php echo $dbdata['id_user']?>" onclick="return confirm('Apakah yakin ingin menghapus data dengan username (<?php echo $dbdata['username']?>) ')">Delete</a></button> </th>
            </tr>
          <?php }?>
        
    </table>
    </div>
    <?php include(ROOT_PATH."/include/footer.php"); ?>
</div>
    <script src="../assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                text: 'Proses Gagal',
                icon: 'error',
            })
        } else {
            ''
        }
    </script>
</body>
</html>