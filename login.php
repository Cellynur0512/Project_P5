<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <div class="hal_login">
        <img class="img-wk" src="img/wikrama-removebg-preview.png" alt="">
        <p class="text-wk">SMK Wikrama Bogor</p>
        <img class="img-msj2" src="img/masjid.png" alt="">
        <div class="login">
            <form action="" method="pos">
                <h1 class="text-login"><b>Login</b></h1>
                <input class="input" type="text" placeholder="Username"><br>
                <input class="input" type="password" placeholder="Password"><br>
                <input class="input-cek" type="checkbox" name="cekadmin">Login sebagai admin<br>
                <input class="input-cek" type="checkbox" name="cekpembimbing">Login sebagai pembimbing<br>
                <div class="btn-loginn">
                    <a class="btn-login2" href="" name="login">Login</a>
                </div>
            </form>
        </div>
    </div>
    <?php
    if(isset($_POST['login'])){
        if(isset($_POST['cekadmin'])){
            header("Location: hal_admin.php");
        } elseif(isset($_POST['cekpembimbing'])){
            header("Location: hal_pemb.php");
        } else{
            echo "<script>alert('Masukkan data anda dengan benar!!!');window.location='login.php';</script>";
        }
    }
    ?>
</body>
</html>