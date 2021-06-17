<?php include("../path.php"); 
include(ROOT_PATH.'/db/conn.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Update Data Pengguna</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/mahasiswa.css">
</head>
<body>
    <div class="tabel">
    <h2 align="center">Update Data Admin</h2>

        <?php if(isset($_GET['pesan'])){
                if($_GET['pesan']=='false'){
                    echo "<h6 align='center' style='color:red;'>Data Masih Kosong</h6>";
                }   
            }    
        ?>
    <?php
        $id = $_GET['id_edit'];
        $query = "SELECT * FROM tabel_user WHERE id_user='$id'";
        $data=mysqli_query($conn,$query);
        $tampil = mysqli_fetch_array($data);
    ?>
    <form action="update_admin_proses.php" align="center" method="POST">
    
    
   
    <h5>Username : <?php echo $tampil['username']?></h5>
    <h5>Level : <?php echo $tampil['level']?></h5>
    <div class=" row mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Password Baru</label>
    <div class="col-sm-10">
    <input type="password"  name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>

  <div class=" row mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Ulangi Password Baru</label>
    <div class="col-sm-10">
    <input type="password"  name="repassword" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <input type="hidden" name="id_user" value="<?php echo $tampil['id_user']?>">
  <input type="submit" class="btn btn-primary" value="simpan">


</form>
</div>
</body>
</html>