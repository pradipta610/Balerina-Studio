<?php 

$server = 'localhost';
$database ='root';
$pass='';
$username='prototype';


$conn= mysqli_connect($server ,$database ,$pass ,$username);

if(!$conn){
    echo "database konek gagal!" .mysqli_connect_error();
}


