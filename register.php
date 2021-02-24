<!DOCTYPE html>
<html>
    <head>
        <title>Đăng Ký</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/login.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <div class="container">   
            </div>
        </header>
        <main>
            <div class="container">
                <div class="login-form">
                    <form  method="POST" action="xulyregister.php">
                        <h1>Đăng Ký</h1>
                        <table>
                            <tr>  <!-- hang -->
                                <th>Họ và tên</th> <!-- cot -->
                                <th><input type="text" name="hoten"></th>
                            </tr>
                            <tr>
                                <th>Tên đăng nhập</th>
                                <th><input type="text" name="username"></th>
                            </tr>

                            <tr>
                            <tr>
                                <th >Email</th>
                                <th><input type="text" name="email"></th>
                            </tr>
                                <th>Mật khẩu</th>
                                <th><input type="password" name="password"></th>
                            </tr>
                            <tr>
                                <th>Gõ lại mật khẩu</th>
                                <th><input type="password" name="repass"></th>
                            </tr>
                            <tr>
                                <th>Số điện thoại</th>
                                <th><input type="text" name="sdt"></th>
                            </tr>
                            
                            <tr>
                                <th >địa chỉ giao hàng</th>
                                <th><input type="text" name="diachi"></th>
                            </tr>
                           
                            
                           
                            <tr>
                                <th>    
                                <div class="btn-box">
                                    <button type="submit" name="register ">Đăng ký </button>           
                                </div>         
                                </th>    
                            </tr>
                        </table>
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
