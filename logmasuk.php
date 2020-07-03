<html>
	<head><title>Laman Web KVAD</title>
	<link rel="stylesheet" type = "text/css" href="style.css">
	</head>
		<body>
            
          
<div id="container">

        <div id="banner" align="center">
        <img src="img/logo1.png" width="500" height="300"  align="bottom">
        </div>
        
        <div id = "header">

                <h1>KOLEJ VOKASIONAL ALAM DAMAI</h1>
        </div>

        <div id="content">
            
          <div id="nav">
                    <ul>
                    <li align="center"><h3>MENU NAVIGASI</h3></li>
                    <li align="center"><h3>______________</h3></li>
                    <li><a href="index.php">UTAMA</a></li>
                    <li><a href="#">PENGUMUMAN</a></li>
                    <li><a href="logmasuk.php">LOG MASUK</a></li>

                    </ul>
                    </div>
            
                    <div id="main">
                        <form name="login" method="POST" action="checklogin.php">
                        <h1>LOG MASUK</h1>
                        <br>
                        <div class="input-block">
                            <label for="nama">USERNAME :</label>
                            <input type="text" class="form-control" name="Uusername" required="">
                        </div>
                        <br>
                        <div class="input-block">
                            <label for="nama">PASSWORD :</label>
                            <input type="password" class="form-control" name="Ppassword" required="">
                        </div>
                        <br>
                        <button class="button" type="submit" name="submit">Hantar</button>
                        <button class="button" type="reset" name="reset">Reset</button>
                        </form>
                    </div>
        </div>

                <div id="footer">Copyright &copy; 2020
                </div>

            </div>

                </body>
        </html>