<?php
include 'connection.php';

    $user=$_POST['Uusername'];
    $pass=$_POST['Ppassword'];

    $query="select * from admin where username='$user'";

    $rs=mysqli_query($conn,$query);
?>
<html>
<head>
    <title>Semak Login</title>
</head>
<body>

    <p>Prosedur semakan log masuk</p>

    <?php
    if(mysqli_num_rows($rs)==1){
        $record=mysqli_fetch_array($rs);
        $dbPassword=$record['password'];
        if ($dbPassword == $pass) {
            echo "Username dan Password sama.<br>";
            echo "hi $user <br>";
            echo "<a href='homepage.php'>Ke Homepage</a>";
        }
        else{
            echo "Username dijumpai tetapi password tidak sama.<br>";
            echo "<button onclick='kembali()'>Masuk Semula</button>";
        }
    }

    else{
        echo "Username tidak dijumpai";
        echo "<button onclick='kembali()'>Log Masuk Semula</button>";            
    }


    ?>
    <script type="text/javascript">
        function kembali(){
            window.history.back();
        }
    </script>
</body>
</html>

