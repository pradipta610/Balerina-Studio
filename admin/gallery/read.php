<?php include("../../path.php");
include(ROOT_PATH . "/db/conn.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,200;1,400&display=swap" rel="stylesheet"> 
    <title>Gallery - Admin</title>
</head>
<body>
<div class="overflow">
<?php include(ROOT_PATH."/include/navbaradmin.php"); ?>
    <h3 align="center">Data Tabel Gallery</h3>
  
    <div class="containerisi">
    <div class="pilihan">
    <button type="button" class="btn btn-primary"><a href="create.php">Tambah data</a></button>
    <button type="button" class="btn btn-primary"><a href="../read_admin.php">Kelola Data Balerina Studio</a></button>
    </div>
    <table >
        <tr class="top">
            <th align="center">No</th>
            <th align="center">Foto</th>
            <th align="center">Author</th>
            <th align="center">Tanggal Terbit</th>
            <th align="center">Action</th>
            
        </tr>

        <?php
        $no=1;
        $query = "SELECT * FROM tabel_gambar JOIN tabel_user on tabel_gambar.id_user = tabel_user.username where username='$_SESSION[admin]'";
        $data = mysqli_query($conn,$query);

        while($dbdata = mysqli_fetch_array($data)){
            ?>
          <tr>
            <th><?php echo $no++ ;?> </th>
            <th><a target="_blank" href="<?php echo '../../assets/imggallery/'.$dbdata['foto'];?>">
            <img src="<?php echo '../../assets/imggallery/'.$dbdata['foto']?>" alt="foto" width="64">
            </a></th>
            <th><?php echo $dbdata['username_gambar'];?></th>
            <th><?php echo $dbdata['tglpembuatan'];?></th>
            <th><button type="button" class="btn btn-success"><a href="update.php?id_edit=<?php echo $dbdata['id_foto']?>">Edit</a> </button>
            <button type="button" class="btn btn-danger"><a href="delete.php?id=<?php echo $dbdata['id_foto']?>" onclick="return confirm('Apakah yakin ingin menghapus foto ini?')">Delete</a></button> </th>
            </tr>
          <?php }?>
        
    </table>
    </div>
    
    <?php include(ROOT_PATH."/include/footer.php"); ?>
</div>
    <script src="../../assets/js/script.js"></script>
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