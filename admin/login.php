<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/login.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <header>
        <div class="container">

        </div>
    </header>
    <main>
        <div class="container">
            <div class="login-form">
                <?php
                include('kiemtralogin.php');
                ?>
                <?php if (isset($thongbao))
                    echo $thongbao;
                ?>
                <form action="" method="post">
                    <h1>Đăng nhập vào trang quản trị</h1>
                    <div class="input-box">
                        <i></i>
                        <input type="text" placeholder="Nhập username" name="u">
                    </div>
                    <div class="input-box">
                        <i></i>
                        <input type="password" placeholder="Nhập mật khẩu" name="p">
                    </div>
                    <div class="btn-box">
                        <button type="submit">
                            Đăng nhập
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </main>
    <footer>
        <div class="container">



        </div>
    </footer>
</body>

</html>