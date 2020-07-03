<?php
include"connection.php";

$NAMA=$_POST['nama'];
$KELAS=$_POST['kelas'];
$JANTINA=$_POST['jantina'];
$MENU=$_POST['menu'];
$ADD=$_POST['add'];

$sql= "INSERT into spm(nama,kelas,jantina,addons,menu)values('$NAMA','$KELAS','$MENU','$ADD','$JANTINA')";

if(mysqli_query($conn,$sql)){
    header('location:pesanMakanan.php');
}
else {
    echo "fail";
}
?>