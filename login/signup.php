<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="card">
        <div id="card-content">
            <div id="card-title">
                <h2>Login</h2>
                <div class="underline-title">
                    <img src="img/Wikrama.png" alt="">
                </div>
            </div>
            <form method="post" class="form">
                <label for="user-name" style="padding-top: 13px">&nbsp;
                    username
                </label>
                <input id="user-name" class="form-content" type="username"
                name="userame" autocomplete="on" required/>
                <div class="form-border"></div>

                <label for="user-password" style="padding-top: 22px">&nbsp;
                    password
                </label>
                <input id="user-password" class="form-content" type="password"
                name="password" autocomplete="on" required/>
                <div class="form-border"></div>

                <div class="remember-forgot">
                <label><input type="checkbox">Masuk sebagai admin</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Masuk sebagai guru</label>
            </div>
            <input id="submit-btn" type="submit" name="submit" value="LOGIN">
            <p>Sudah punya Akun<a href="login.php" id="login"> Login</a></p>

            </form>

        </div>
    </div>
</body>
</html>