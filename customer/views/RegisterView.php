<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TunaShop | Signup</title>
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

.signup-wrapper .company-details {
    background-image: url(Images/bannerlogin.png);
    background-size: cover;
    position:relative;


}
.signup-wrapper .company-details:before {
    content: "";
    position: absolute;
    display: block;
    left: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    background: linear-gradient(to top, rgba(0,0,0,0.75) 0%,rgba(0,0,0,0) 100%);
}

.signup-wrapper .company-details .wrapper-1{
    position: relative;
    padding-bottom: 10px;
    padding-top: 22px;

}
.signup-wrapper .company-details .logo {
    padding: 0 20px;
    width: 20%;
    margin: 0 auto;
}
.signup-wrapper .company-details .logo .icon-logo{
    background: url(../Images/logotext.png);
    background-size:contain ;
    background-repeat: no-repeat;
    width: 120px;
    margin: 0 auto;
}
.signup-wrapper .company-details .title {
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
.signup-wrapper .company-details .slogan {
   display: none;
}

.signup-wrapper .signup-form .wrapper-2{
    padding: 14px 20px;
    margin: 30px 80px;
}
.signup-wrapper .signup-form .form-title{
    font-size: 1.5em;
    color:  #00d607;
    padding: 5px;
    text-align: center;

}
.signup-wrapper .signup-form .form .content-item{
    text-transform: uppercase;
    color: #A19F9C;
    font-size: 0.7em;
    letter-spacing: 1px;
    margin-top: 35px;
    text-align: center;
}
.signup-wrapper .signup-form .form input[type=text],.signup-wrapper .signup-form .form input[type=password]{
    border: none;
    border-bottom: 1px solid #e4e4e4;
    padding-top: 10px;
    padding-bottom: 10px;
    display: block;

    text-align: center;
    width: 100%;
}
.signup-wrapper .signup-form .signup {
    background-color: #00d607;
    border: none;
    color: white;
    padding: 15px 25px;
    font-size: 1em;
    text-transform: capitalize;
    margin-top: 49px;
    border-radius: 5px;
    border-style: 1px solid;

}
.signup-wrapper .signup-form .login{
    color: #00d607;
    padding: 20px;
    font-weight: 600;
    text-decoration: none;
    font-size: 0.9em;
    width: 95%;
    margin: 0 auto;
    display: inline-block;
    text-align: center;
    border-style: solid;
    border-color: gray;
    border-width: 1px;
    border-radius: 5%;
    padding-bottom: 15px;
    padding-top: 15px;
}
input::placeholder {
    color: #575757;
}

@media (min-width: 200px) {

    .signup-wrapper .signup-form .wrapper-2{
        margin: 30px 23px;
    }

    .signup-wrapper .company-details .title {
        width: 90%;
        font-size: 1.5em;
    }

}
@media (min-width: 300px) {
    .signup-wrapper .signup-form .login{
        display: inline-block;
    }
    .signup-wrapper .signup-form .wrapper-2{
        margin: 30px 60px;
    }

    .signup-wrapper .company-details .title {
        width: 80%;
       font-size: 2em;
    }

}
@media (min-width: 500px) {
    .signup-wrapper .signup-form .login{
        display: inline;
    }
}

@media (min-width: 700px) {
    .signup-wrapper .company-details,
    .signup-wrapper .signup-form {
        width: 50%;
    }
    .signup-wrapper {
       display: flex;
        max-width: 700px;
        margin: 0 auto;
        margin-top: 5%;
    }
    .signup-wrapper .company-details .wrapper-1 {
        padding-bottom: 150px;
        padding-top: 160px;
    }
    .signup-wrapper .company-details .slogan {
        padding: 0 20px;
        width: 70%;
        margin: 0 auto;
        color: #fff;
        font-size: 1.2em;
        text-align: center;
        text-shadow: 1px 1px #4b4a4a;
        display: block;
    }
    .signup-wrapper .company-details .title {
        width: 76%;
    }
    .signup-wrapper .signup-form .wrapper-2{
        padding: 50px 40px;
        margin: 0;
    }

    .signup-wrapper .signup-form .login{
        display: inline;
    }
    .signup-wrapper .signup-form .form .content-item{
        text-align: initial;
    }
    .signup-wrapper .signup-form .form input[type=text],.signup-wrapper .signup-form .form input[type=password]{
        text-align: initial;

    }
   .signup-wrapper .signup-form .form-title{
        text-align: initial;
     padding :0;
    }

}
</style>
</head>
<body>
    <hr/>
    <div class="content-wrapper">
        <div class="content">
            <div class="signup-wrapper shadow-box">
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

                <div class="signup-form ">
                    <div class="wrapper-2">
                        <div class="form-title">Đăng ký hôm nay!</div>
                        <?php if(isset($_GET["notify"])&&$_GET["notify"]=="error"): ?>
                        <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>
                        <?php else: ?>
                        <?php endif; ?>
                        <div class="form">
                            <form method='post' action="index.php?controller=account&action=registerPost">
                                <p class="content-item">
                                    <label>Họ & tên
                                        <input type="text" name="name" placeholder="Nhập họ và tên"  class="input-control form-control" required="">
                                        
                                    </label>
                                </p>

                                <p class="content-item">
                                    <label>Email
                                        <input type="text" name="email" placeholder="Nhập email"  class="input-control form-control" required="">
                                    </label>
                                </p>

                                <p class="content-item">
                                    <label>Địa chỉ
                                        <input type="text" name="address" placeholder="Nhập địa chỉ"  class="input-control form-control" required="">
                                    </label>
                                </p>

                                <p class="content-item">
                                    <label>Số điện thoại
                                        <input type="text" name="phone" placeholder="Nhập số điện thoại"  class="input-control form-control" required="">
                                    </label>
                                </p>

                                <p class="content-item">

                                    <label>Mật khẩu
                                        <input type="password" name="password" placeholder="*****"  class="input-control form-control" required="">
                                    </label>
                                </p>


                                <button type="submit"  class="signup" >Đăng ký</button>
                                <a href="index.php?controller=account&action=login" class="login">Đăng nhập</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>






