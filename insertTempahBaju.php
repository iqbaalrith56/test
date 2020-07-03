<?php
include"connection.php";

$NAMA=$_POST['nama'];
$KELAS=$_POST['kelas'];
$JANTINA=$_POST['jantina'];
$RUMAHSUKAN=$_POST['rumahsukan'];
$SAIZ=$_POST['saiz'];

$sql= "INSERT into stbs(nama,kelas,saiz,jantina,rumahsukan)values('$NAMA','$KELAS','$RUMAHSUKAN','$SAIZ','$JANTINA')";

if(mysqli_query($conn,$sql)){
    header('location:homepage.php');
}
else {
    echo "fail";
}
?>