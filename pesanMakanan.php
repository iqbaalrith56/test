<!--fail name: datang_form.php -->
<?php
include("connection.php");
?>
<html>
  <head>
    <title>Tempah PESAN MAKANAN</title>
    <style>
    .container{
      width: 70%;
      border:solid 1px grey;
      padding: 20px;
      background-color: rgb(201,255,229);
      margin-left: 150px;
    }

    h1{
      font-family: sans-serif;
      font-weight: lighter;
      font-size: 30px;
    }

    .input-block{
            margin-left: 30px;
            background-color: rgb(240,248,255);
            width: 80%;
            padding: 15px;
            height: 30px;
            margin-bottom: 20px;
            font-size: 20px;
            font-family: sans-serif;
          }
    .input-block-textarea{
            margin-left: 30px;
            background-color: rgb(240,248,255);
            width: 80%;
            padding: 15px;
            height: 50px;
            margin-bottom: 20px;
            font-size: 20px;
            font-family: sans-serif;
          }

      .form-control{
        width: 50%;
        font-size: 15px;
        margin-left: 30px;
        padding: 5px;
      }
      .form-control-textarea{
        height: 50px;
        width: 50%;
        font-size: 15px;
        margin-left: 30px;
        padding: 5px;
      }
      .button,
      a {
        background-color: rgb(167, 44, 101);
        color: white;
        padding: 15px 20px;
        text-align: center;
        font-size: 16px;
        text-decoration: none;
      }
    </style>
  </head>
<body>
<div class="container">
  <center><h1>TEMPAH PESAN MAKANAN</h1></center>

  <form method="POST" id="post">

  <div class="input-block">
    <label for="">NAMA</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama Penuh" id="nama">
  </div>
  <div class="input-block">
    <label for="">KELAS</label>
    <select class="form-control" name="kelas">
      <option>IPD</option>
      <option>ISK</option>
      <option>MTK</option>
      <option>MPI</option>
      <option>BPP</option>
    </select>
  </div>
  <div class="input-block">
    <label for="">JANTINA</label>
    <select class="form-control" name="jantina">
      <option>LELAKI</option>
      <option>PEREMPUAN</option>
    </select>
  </div>
  <div class="input-block">
    <label for="">MENU</label>
    <select class="form-control" name="menu">
      <option>SET A</option>
      <option>SET B</option>
      <option>SET C</option>
    </select>
  </div>
  <div class="input-block-textarea">
    <label for="">ADD ONS</label>
    <input type="textarea" class="form-control-textarea" name="add" maxlength="100" placeholder="Tambahan...">
  </div> 
  <div>\
    <center>
    <!--- mula proses menyimpan dengan butang Hantar -->
    <button class="button" type="submit" name="submit" onclick="popup()">Hantar</button>
    <button class="button" type="reset" name="reset">Reset</button>
    </center>
    <script>
    function popup(){

      if (document.getElementById('nama').value == ""){
        alert("Sila isi Nama");
      }

      else{
        alert("Berjaya Tempah");
        document.getElementById("post").action="insertPesanMakanan.php";
      }
     }
    </script>
  </div>  </form>  </div></body></html>

