
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | Login</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <style type="text/css"> 
    * {
        box-sizing: border-box;
        font-family: 'Montserrat', sans-serif ;
    }
    body{
        margin: 0;
        padding:0;
        background: #e9e9e9;
    }
    .content{
        width: 1280px;
        max-width: 100%;
        margin: 0 auto;
    }


    .shadow-box{
        background: white;
    }
    p{
        padding: 0;
        margin: 0;
    }
    @media (min-width: 700px) {
        .shadow-box{
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.3);
        }
    }

    .login-wrapper .company-details {
        background-image: url(Images/bannerlogin.png);
        background-size: cover;
        position:relative;


    }
    .login-wrapper .company-details:before {
        content: "";
        position: absolute;
        display: block;
        left: 0;
        right: 0;
        bottom: 0;
        height: 100%;
        background: linear-gradient(to top, rgba(0,0,0,0.75) 0%,rgba(0,0,0,0) 100%);
    }

    .login-wrapper .company-details .wrapper-1{
        position: relative;
        padding-bottom: 10px;
        padding-top: 22px;

    }
    .login-wrapper .company-details .logo {
        padding: 0 20px;
        width: 20%;
        margin: 0 auto;
    }
    .login-wrapper .company-details .logo .icon-logo{
        background: url(../Images/logotext.png);
        background-size:contain ;
        background-repeat: no-repeat;
        width: 120px;
        margin: 0 auto;
    }
    .login-wrapper.company-details .title {
        padding: 20px;
        width: 74%;
        margin: 0 auto;
        text-transform: uppercase;
        color: #fff;
        font-weight: 600;
        font-size: 2em;
        text-shadow: 1px 1px #4b4a4a;
        text-align: center;
    }
    .login-wrapper .company-details .slogan {
    display: none;
    }

    .login-wrapper .login-form .wrapper-2{
        padding: 14px 20px;
        margin: 30px 80px;
    }
    .login-wrapper .login-form .form-title{
        font-size: 1.5em;
        color:  #00d607;
        padding: 5px;
        text-align: center;

    }
    .login-wrapper .login-form .form .content-item{
        text-transform: uppercase;
        color: #A19F9C;
        font-size: 0.7em;
        letter-spacing: 1px;
        margin-top: 35px;
        text-align: center;
    }
    .login-wrapper .login-form .form input[type=text],.login-wrapper .login-form .form input[type=password]{
        border: none;
        border-bottom: 1px solid #e4e4e4;
        padding-top: 10px;
        padding-bottom: 10px;
        display: block;
        text-align: center;
        width: 100%;
    }
    .login-wrapper .login-form .signup {
        background-color: #00d607;
        border: none;
        color: white;
        padding: 14px 25px;
        font-size: 1em;
        text-transform: capitalize;
        margin-top: 49px;
        border-radius: 5px;

    }
    .login-wrapper .login-form .login{
        color: #00d607;
        padding: 20px;
        font-weight: 600;
        text-decoration: none;
        font-size: 0.9em;
        width: 52%;
        margin: 0 auto;
        display: inline-block;
        text-align: center;
        padding-top: 12px;
        height: 46px;

    }
    input::placeholder {
        color: #575757;
    }

    @media (min-width: 200px) {

        .login-wrapper .login-form .wrapper-2{
            margin: 30px 23px;
        }

        .login-wrapper .company-details .title {
            width: 90%;
            font-size: 1.5em;
            color: while;
        }

    }
    @media (min-width: 300px) {
        .login-wrapper .login-form .login{
            display: inline-block;
        }
        .login-wrapper .login-form .wrapper-2{
            margin: 30px 60px;
        }

        .login-wrapper .company-details .title {
            width: 80%;
        font-size: 2em;
        }

    }
    @media (min-width: 500px) {
        .login-wrapper .login-form .login{
            display: inline;
        }
    }

    @media (min-width: 700px) {
        .login-wrapper .company-details,
        .login-wrapperr .login-form {
            width: 50%;
        }
        .login-wrapper {
        display: flex;
            max-width: 700px;
            margin: 0 auto;
            margin-top: 5%;
        }
        .login-wrapper .company-details .wrapper-1 {
            padding-bottom: 150px;
            padding-top: 160px;
        }
        .login-wrapper .company-details .slogan {
            padding: 0 20px;
            width: 70%;
            margin: 0 auto;
            color: #fff;
            font-size: 1.2em;
            text-align: center;
            text-shadow: 1px 1px #4b4a4a;
            display: block;
        }
        .login-wrapper .company-details .title {
            width: 76%;
        }
        .login-wrapper .login-form .wrapper-2{
            padding: 50px 40px;
            margin: 0;
        }

        .login-wrapper .login-form .login{
            display: inline;
        }
        .login-wrapper .login-form .form .content-item{
            text-align: initial;
        }
        .login-wrapper .login-form .form input[type=text],.login-wrapper .login-form .form input[type=password]{
            text-align: initial;

        }
    .login-wrapper .login-form .form-title{
            text-align: initial;
        padding :0;
        }

    }
    </style>
</head>
<body>
</hr>
<div class="login-wrapper">
<div class="content">
                    <div class="login-wrapper shadow-box">
                        <div class="company-details ">
                          
                            <div class="shadow"></div>
                            <div class="wrapper-1">
                                <div class="logo">
                                    <div class="icon-logo"></div>
                                </div>
                                <h1 class="title">Tuna Shop</h1>
                                <div class="slogan">Menwear and Accessory</div>
                            </div>
                        </div>
        
                        <div class="login-form ">
                            <div class="wrapper-2">
                                <div class="form-title">Cảm ơn vì đã chọn chúng tôi</div>
                                <div class="form">
                                    <form method='post' action="index.php?controller=account&action=loginPost">
                                        <p class="content-item">
                                            <label>Email
                                                <input type="text"  placeholder="Nhập email!" name="email" required>
                                            </label>
                                        </p>
        
                                        <p class="content-item">
        
                                            <label>Mật khẩu
                                                <input type="password" placeholder="*******" name="password" required>
                                            </label>
                                        </p>
                                        
                                        <button type="submit"  class="login">Đăng nhập</button>
                                        <a href="index.php?controller=account&action=register" class="signup">Đăng ký</a>
                                    </form>
                                </div>
                            </div>
        
                        </div>
                    </div>
                </div>
</div>
</body>
</html>