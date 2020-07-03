<!--fail name: datang_form.php -->
<?php
include"connection.php";
?>
<html>
  <head>
    <title>Tempah Baju</title>
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

      .form-control{
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
  <center><h1>TEMPAH BAJU</h1></center>

  <form method="POST" id="post">

  <div class="input-block">
    <label for="">NAMA</label>
    <input type="text" class="form-control" name="nama" placeholder="Nama Penuh" id="nama">
  </div>
  <div class="input-block">
    <label for="">KELAS</label>
    <select class="form-control" name="kelas" required="" >
      <option>IPD</option>
      <option>ISK</option>
      <option>MTK</option>
      <option>MPI</option>
      <option>BPP</option>
    </select>
  </div>
  <div class="input-block">
    <label for="">JANTINA</label>
    <select class="form-control" name="jantina" required="">
      <option>LELAKI</option>
      <option>PEREMPUAN</option>
    </select>
  </div>
  <div class="input-block">
    <label for="">RUMAH SUKAN</label>
    <select class="form-control" name="rumahsukan" required="">
      <option>MERAH</option>
      <option>KUNING</option>
      <option>HIJAU</option>
      <option>BIRU</option>
    </select>
  </div>
  <div class="input-block">
    <label for="" id="amien1">SAIZ</label>
    <select class="form-control" name="saiz" required="">
      <option>S</option>
      <option>M</option>
      <option>L</option>
      <option>XL</option>
    </select>
  </div> 
  <div>
    <center>
      </button>
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
        document.getElementById("post").action="insertTempahBaju.php";
      }
     }
    </script>
  </div>  </form>  </div> </body></html>

