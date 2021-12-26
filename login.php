
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="./css/login/style.css">
</head>

<body>
<div class="main">
        <div class="login-box">
            <div class="text-login">
            <p>Đăng nhập</p>
            <span></span>
            </div>
            <div class="login-form">
                <form method="POST" action="/jamstore/index.php">
                    <input class="form-control" type="email" placeholder="Email">
                    <input class="form-control" type="password" placeholder="Mật khẩu">
                    <input class="form-enter" type="submit" value="Đăng nhập">
                </form>
                <div class='social-links'>
                <a href="/jamstore/register.php">Đăng ký</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>