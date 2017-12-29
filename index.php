<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

    <div id="wrapper">
        <!-- header -->
        <header class="header">
            <div class="container clearfix">
                <div class="logo clearfix">
                    <div class="logo-img">
                        <a href="#"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="logo-info">
                        <a class="logo-info__link" href="#">Frederiko.ru</a>
                        <p class="logo-info__text">Скинали и фартуки для кухни</p>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav__item active">
                        <a class="nav__link" href="#">Калькулятор</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">Преимущества</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">Тарифы</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">Наши работы</a>
                    </li>
                    <li class="nav__item">
                        <a class="nav__link" href="#">Отзывы</a>
                    </li>
                </ul>
                <div class="contact">
                    <span class="contact__workdays">9<sup>00</sup> - 21<sup>00</sup> без выходых</span>
                    <p class="contact__number">+7 (495) 236-85-40</p>
                    <button class="contact__call">Заказать звонок</button>
                </div>
            </div>
        </header>
        <!-- header end -->

        <!-- home -->
        <div class="home">
            <div class="container">
                <h1 class="home-title">Душевые кабины из стекла <br> <span class="gold">от 10000 руб</span></h1>
                <div class="home-form">
                    <h4 class="home-form__title">Рассчитайте стоимость душевой кабины</h4>
                    <div class="choice">
                        <div class="choice__tranparency">
                            <p class="caption ch">Прозрачность стекла:</p>
                            <input class="radio" type="radio" id="oraque" name="transparency" checked>
                            <label class="label" for="oraque">Матовое</label>
                            <br>
                            <input class="radio" type="radio" id="transparent" name="transparency">
                            <label class="label" for="transparent">Прозрачное</label>
                        </div>
                        <div class="choice__type">
                            <p class="caption ch">Тип стекла:</p>
                            <input class="radio" type="radio" id="usual" name="type" checked>
                            <label class="label" for="usual">Обычное</label>
                            <br>
                            <input class="radio" type="radio" id="optiwhite" name="type">
                            <label class="label" for="optiwhite">Optiwhite</label>
                        </div>
                    </div>
                    <div class="area clearfix">
                        <span class="caption">Площадь душевой кабины:</span>
                        <div class="area__input">
                            <span class="minus">-</span>
                            <input type="text" value="1,0 м">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <button class="btn">Расчитать</button>
                </div>
            </div>
        </div>
        <!-- home end -->

        <!-- advantages -->
        <div class="advantages box">
            <div class="container">
                <h2 class="big-title">Наши преимущества</h2>
                <div class="all-advantages">
                    <div class="box-advantages">
                        <div class="info-box">
                            <div class="info-box__title">
                                <div class="img"><img src="img/adv1.png" alt="adv"></div>
                                <div class="title"><p class="bold">Обеспечиваем высокое качество стекла</p></div>
                            </div>
                            <div class="info-box__text">
                                <p>Используем итальянское стекло. Производим двойной контроль качества.</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                <div class="img"><img src="img/adv2.png" alt="adv"></div>
                                <div class="title"><p class="bold">Собственное  производство</p></div>
                            </div>
                            <div class="info-box__text">
                                <p>Производим стекло с 2011 года, на своём оборудовании.</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                <div class="img"><img src="img/adv3.png" alt="adv"></div>
                                <div class="title"><p class="bold">Срок изготовления 7 рабочих дней</p></div>
                            </div>
                            <div class="info-box__text">
                                <p>Если не успеем — стекло бесплатно.</p>
                            </div>
                        </div>
                    </div>
                    <div class="box-advantages">
                        <div class="info-box">
                            <div class="info-box__title">
                                <div class="img"><img src="img/adv4.png" alt="adv"></div>
                                <div class="title"><p class="bold">Безопасное, ударостойкое стекло</p></div>
                            </div>
                            <div class="info-box__text">
                                <p>Сверхпрочное, жаростойкое и ударопрочное стекло.</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title bug">
                                <div class="img bug"><img src="img/adv5.png" alt="adv"></div>
                                <div class="title bux"><p class="bold">Никаких скрытых  наценок и  доплат</p></div>
                            </div>
                            <div class="info-box__text">
                                <p>Точную цену вы можете посмотреть на сайте или узнать по телефону.</p>
                            </div>
                        </div>
                        <div class="info-box">
                            <div class="info-box__title">
                                <div class="img"><img src="img/adv6.png" alt="adv"></div>
                                <div class="title"><p class="bold">Гарантируем <br> качество</p></div>
                            </div>
                            <div class="info-box__text">
                                <p>Гарантия на стекло 5 лет, в договоре.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- advantages end -->
    </div>

</body>
</html>