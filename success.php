<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media-style.css">
    <title>Document</title>
</head>
<body>

<div id="wrapper" class="blue">

    <div class="success">
        <div class="container">
            <div class="success-info">
                <h1 class="title">Спасибо за вашу заявку. <br>  Стоимость стекла составляет <span class="gold"></span></h1>
                <p class="text">В течение 1 рабочего дня с вами свяжется наш менеджер для <br> уточнения информации.</p>
                <a class="btn" href="index.php">Вернуться на главную</a>
            </div>
            <div class="success-footer clearfix">
                <div class="logo clearfix">
                    <div class="logo-img">
                        <a href="#"><img src="img/gold-logo.png" alt="logo"></a>
                    </div>
                    <div class="logo-info">
                        <a class="logo-info__link" href="#">Frederiko.ru</a>
                        <p class="logo-info__text">Скинали и фартуки для кухни</p>
                    </div>
                </div>
                <address class="address clearfix">
                    <div class="address__img">
                        <img class="footer-img" src="img/white-placeholder.png" alt="">
                    </div>
                    <div class="address__text">
                        <span class="text">г.Москва БЦ "Вега" <br> (ул. Вербная, д.8с1, оф.207)</span>
                        <br>
                        <a class="link" href="#">info@frederiko.ru</a>
                    </div>
                </address>
                <div class="work-hours clearfix">
                    <div class="work-hours__img">
                        <img class="footer-img" src="img/white-clock.png" alt="">
                    </div>
                    <div class="work-hours__text">
                        <span class="text">Мы работаем: <br> с 9 до 21 Без выходных</span>
                    </div>
                </div>
                <div class="copyright-info">
                    <a class="privacy-policy" href="#">Политика конфиденциальности</a>
                    <p class="copyright">© "Frederiko.ru" 2014 - 2017. Все права защищены.</p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/sessvars.js"></script>
    <script>$('.title .gold').text(sessvars.money.price);</script>

</div>

</body>
</html>