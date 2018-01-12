<?php session_start(); ?>
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
                <h1 class="title">
                    <?php if ($_GET["send"] == 1)
                            echo "Спасибо за вашу заявку. <br>  Стоимость стекла составляет <span class=\"gold\"></span>";
                          elseif ($_GET["send"] == 2)
                            echo "Спасибо за вашу заявку.";
                          else
                            echo "";
                    ?>
                </h1>
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
                        <a class="link" href="mailto:a.semenova@remontexpress.ru">info@frederiko.ru</a>
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
                    <a class="privacy-policy pop-up" href="#">Политика конфиденциальности</a>
                    <p class="copyright">© "Frederiko.ru" 2014 - 2017. Все права защищены.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="popup priv-pol">
        <div class="container">
            <div class="close pop-up"></div>
            <h3 class="popup__header">Политика Конфиденциальности</h3>
            <p class="popup__text">г.Москва</p>
            <p class="popup__text">«15» февраля 2017 г.</p>
            <p class="popup__text">Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в отношении всей информации, которую сайт компании «Флагман Ремонта», расположенный на доменном имени flagmanremonta.ru, может получить о Пользователе во время использования сайта, программ и продуктов компании.</p>
            <h4 class="popup__title">1. ОПРЕДЕЛЕНИЕ ТЕРМИНОВ</h4>
            <ul class="popup-list">
                <li>
                    <p class="popup__text">1.1 В настоящей Политике конфиденциальности используются следующие термины:</p>
                </li>
                <li>
                    <p class="popup__text">1.1.1. «Администрация сайта flagmanremonta.ru (далее – Администрация сайта) » – уполномоченные сотрудники на управления сайтом, действующие от имени Название организации, которые организуют и (или) осуществляет обработку персональных данных, а также определяет цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными.</p>
                </li>
                <li>
                    <p class="popup__text">1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному или определяемому физическому лицу (субъекту персональных данных).</p>
                </li>
                <li>
                    <p class="popup__text">1.1.3. «Обработка персональных данных» - любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных.</p>
                </li>
                <li>
                    <p class="popup__text">1.1.4. «Конфиденциальность персональных данных» - обязательное для соблюдения Оператором или иным получившим доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных данных или наличия иного законного основания.
                    </p>
                </li>
                <li>
                    <p class="popup__text">1.1.5. «Пользователь сайта flagmanremonta.ru (далее ? Пользователь)» – лицо, имеющее доступ к Сайту, посредством сети Интернет и использующее Сайт flagmanremonta.ru.</p>
                </li>
                <li>
                    <p class="popup__text">1.1.6. «Cookies» — небольшой фрагмент данных, отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб-браузер каждый раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта.</p>
                </li>
                <li>
                    <p class="popup__text">1.1.7. «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, построенной по протоколу IP.</p>
                </li>
            </ul>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/sessvars.js"></script>
    <script>
        $(document).ready(function () {
            $('.title .gold').text(sessvars.money.price);
            $('a.pop-up').click(function (event) {
                event.preventDefault();
                $('body').css('overflow', 'hidden');
                if ($(this).hasClass("privacy-policy"))
                    $('.popup.priv-pol').css({'display': 'block', 'overflow': 'auto'});
                else if ($(this).hasClass("data-processing"))
                    $('.popup.data-processing').css({'display': 'block', 'overflow': 'auto'});
            });
            $('.close').click(function () {
                if ($(this).hasClass("pay")) {
                    $('.payment').css('display', 'none');
                } else if ($(this).hasClass("phone")) {
                    $('.phone-menu').css('display', 'none');
                } else if ($(this).hasClass("pop-up")) {
                    $('.popup').css('display', 'none');
                    $('body').css('overflow', 'auto');
                }
            });
        });
    </script>

</div>

</body>
</html>