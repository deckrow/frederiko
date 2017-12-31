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
                        <div class="area__input clearfix">
                            <span class="minus">-</span>
                            <input type="text" value="1,0 м">
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <button class="btn">Рассчитать</button>
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
                                <div class="title"><p class="bold">Срок изготовления <br> 7 рабочих дней</p></div>
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

        <!-- works -->
        <div class="works">
            <div class="container box">
                <h2 class="big-title">Наши работы</h2>
                <div class="slider clearfix">
                    <div class="slide">
                        <div class="slide-img">
                            <img src="img/img-slider.png" alt="img-slider">
                        </div>
                        <div class="slide-info">
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Состав</p></div>
                                <div class="slide-info__description"><p>1 дверь (2000*800)</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Материал</p></div>
                                <div class="slide-info__description"><p>Стекло AGC (Бельгия) 8 мм,  еврокромка, закаленное</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Тип двери</p></div>
                                <div class="slide-info__description"><p>Распашная</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Фурнитура</p></div>
                                <div class="slide-info__description"><p>Петли, коннекторы, штанга +  держатели, ручка-кноб, уплотнитель.</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Срок выполнения</p></div>
                                <div class="slide-info__description"><p>5 дней</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p class="price">Стоимость от</p></div>
                                <div class="slide-info__description"><p class="big-price">5 500 <span class="small-price">руб.</span></p></div>
                            </div>
                            <button class="slide-info__btn">Хочу такое же</button>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="img/img-slider.png" alt="img-slider">
                        </div>
                        <div class="slide-info">
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Состав</p></div>
                                <div class="slide-info__description"><p>1 дверь (2000*800)</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Материал</p></div>
                                <div class="slide-info__description"><p>Стекло AGC (Бельгия) 8 мм,  еврокромка, закаленное</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Тип двери</p></div>
                                <div class="slide-info__description"><p>Распашная</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Фурнитура</p></div>
                                <div class="slide-info__description"><p>Петли, коннекторы, штанга +  держатели, ручка-кноб, уплотнитель.</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Срок выполнения</p></div>
                                <div class="slide-info__description"><p>5 дней</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p class="price">Стоимость от</p></div>
                                <div class="slide-info__description"><p class="big-price">15 500 <span class="small-price">руб.</span></p></div>
                            </div>
                            <button class="slide-info__btn">Хочу такое же</button>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-img">
                            <img src="img/img-slider.png" alt="img-slider">
                        </div>
                        <div class="slide-info">
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Состав</p></div>
                                <div class="slide-info__description"><p>1 дверь (2000*800)</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Материал</p></div>
                                <div class="slide-info__description"><p>Стекло AGC (Бельгия) 8 мм,  еврокромка, закаленное</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Тип двери</p></div>
                                <div class="slide-info__description"><p>Распашная</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Фурнитура</p></div>
                                <div class="slide-info__description"><p>Петли, коннекторы, штанга +  держатели, ручка-кноб, уплотнитель.</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p>Срок выполнения</p></div>
                                <div class="slide-info__description"><p>5 дней</p></div>
                            </div>
                            <div class="slide-info__block">
                                <div class="slide-info__title"><p class="price">Стоимость от</p></div>
                                <div class="slide-info__description"><p class="big-price">155 500 <span class="small-price">руб.</span></p></div>
                            </div>
                            <button class="slide-info__btn">Хочу такое же</button>
                        </div>
                    </div>
                </div>
                <div class="slider-switch">
                    <div class="btn-prev-next">
                        <div class="switcher-btn prev"><img src="img/arrow-left.png" alt="prev"></div>
                        <div class="switcher-btn next"><img src="img/arrow-right.png" alt="next"></div>
                    </div>
                    <div class="current-count">
                        <p><span class="current"></span>/<span class="count"></span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- works end -->

        <!-- rates -->
        <div class="rates box">
            <div class="container">
                <h2 class="big-title">Тарифы</h2>
                <div class="rates-info">
                    <div class="rates-info__left">
                        <h3 class="rates-title">Каленое стекло</h3>
                        <ul class="rates-list">
                            <li class="rates-list__item">
                                <p class="rates-list__text">Сверхпрочное, жаро и ударостойкое стекло</p>
                            </li>
                            <li class="rates-list__item">
                                <p class="rates-list__text">Каленое стекло имеет зеленоватый оттенок, что искажает светлые тона и цветовые комбинации</p>
                            </li>
                            <li class="rates-list__item">
                                <p class="rates-list__text">Цена каленого стекла немного ниже</p>
                            </li>
                            <li class="rates-list__item">
                                <p class="rates-list__text">Оптимально для небольших пространств и цветных рисунков</p>
                            </li>
                        </ul>
                        <div class="rates-price">
                            <span class="price-text">Стоимость:</span>
                            <span class="price-sum">14 300 <sub>руб.</sub></span>
                        </div>
                        <button class="rates-btn">Хочу такое же</button>
                    </div>
                    <div class="rates-info__right">
                        <h3 class="rates-title white">Стекло Optiwhite</h3>
                        <ul class="rates-list white">
                            <li class="rates-list__item">
                                <p class="rates-list__text">Сверхпрочное, жаро и ударостойкое стекло</p>
                            </li>
                            <li class="rates-list__item">
                                <p class="rates-list__text">Стекло Optiwhite абсолютно прозрачное, точно передает любые особенности рисунка</p>
                            </li>
                            <li class="rates-list__item">
                                <p class="rates-list__text">Цена стекла Optiwhite немного выше</p>
                            </li>
                            <li class="rates-list__item">
                                <p class="rates-list__text">Подходит для больших площадей и черно-белых рисунков</p>
                            </li>
                        </ul>
                        <div class="rates-price white">
                            <span class="price-text">Стоимость:</span>
                            <span class="price-sum">19 300 <sub>руб.</sub></span>
                        </div>
                        <button class="rates-btn">Хочу такое же</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- rates end -->

        <!-- additional product -->
        <div class="products">
            <div class="container box">
                <h2 class="big-title">Дополнительная продукция</h2>
                <div class="all-products">
                    <div class="all-products__block clearfix">
                        <div class="all-products__img"><img src="img/content-bigimg.png" alt=""></div>
                        <div class="all-products__img"><img src="img/content-smallimg.png" alt=""></div>
                        <div class="all-products__img"><img src="img/content-smallimg.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- additional product end -->

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/script.js"></script>

    </div>

</body>
</html>