<?php include("../path.php"); ?>
<?php include(ROOT_PATH.'/db/conn.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Tambah Data Penngguna</title>
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/admin.css">
</head>
<body>
    <div class="tabel">
    <h2 align="center">Tambah Data Admin</h2>

        <?php if(isset($_GET['pesan'])){
                if($_GET['pesan']=='false'){
                    echo "<h6 align='center' style='color:red;'>Data Masih Kosong</h6>";
                }   
            }    
        ?>

    <form action="create_admin_proses.php" align="center" method="POST">
  
    <div class=" row mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
    <input type="text"  name="nama" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    </div>
    <div class=" row mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
    <input type="text"  name="username" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    </div>


    <div class=" row mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
    <input type="password"  name="password" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>

  <div class=" row mb-3">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Ulangi Password</label>
    <div class="col-sm-10">
    <input type="password"  name="repassword" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>
  <select name="level" style="width:100%; margin-bottom:20px; margin-top:0px;" class="form-control show-tick" required>
                            <option value="" selected="">--Pilih User--</option>            
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                             
                        </select>
    <!-- <p>Username</p>
    <input type="text" name="username" required>
    <p>Password</p>
    <input type="password" name="password" required>
    <p>Ulangi Password</p>
    <input type="password" name="repassword" required> -->

    <input type="submit" class="btn btn-primary"  value="simpan">
    <input type="reset" class="btn btn-primary"  value="reset">


</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>