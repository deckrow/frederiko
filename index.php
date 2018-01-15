<?php
    session_start();

    if (isset($_POST["send"])) {
        $from = htmlspecialchars( "Website");
        $to = htmlspecialchars("a.semenova@remontexpress.ru");
        $subject = htmlspecialchars("Душевая кабина.");
        $name = htmlspecialchars($_POST["ima_kl"]);
        $phone = htmlspecialchars($_POST["telefon_lida"]);
        $message = "Имя: " . $name . " Телефон: " . $phone;

        $_SESSION["ima_kl"] = $name;
        $_SESSION["telefon_lida"] = $phone;

        $headers = "From: $from\r\nReply-to: $from \r\nContent-type:text/plain; charset=utf-8\r\n";
        $subject = "=?uff-8?B?" . base64_encode($subject) . "?=";
        mail ($to, $subject, $message, $headers);
        header ("Location: success.php?send=1");
        exit;
    }

    if (isset($_POST["send2"])) {
        $from = htmlspecialchars( "Website");
        $to = htmlspecialchars("a.semenova@remontexpress.ru");
        $subject = htmlspecialchars("Стекло для ванной");
        $name = htmlspecialchars($_POST["ima_kl"]);
        $phone = htmlspecialchars($_POST["telefon_lida"]);
        $message = "Имя: " . $name . " Телефон: " . $phone;

        $headers = "From: $from\r\nReply-to: $from \r\nContent-type:text/plain; charset=utf-8\r\n";
        $subject = "=?uff-8?B?" . base64_encode($subject) . "?=";
        mail ($to, $subject, $message, $headers);
        header ("Location: success.php?send=2");
        exit;
    }

?>

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

<div id="wrapper">

    <!-- header -->
    <header id="header" class="header">
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
                    <a class="nav__link scroll" href="#">Калькулятор</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link scroll" href="#advantages">Преимущества</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link scroll" href="#rates">Тарифы</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link scroll" href="#works">Наши работы</a>
                </li>
                <li class="nav__item">
                    <a class="nav__link scroll" href="#reviews">Отзывы</a>
                </li>
            </ul>
            <div class="contact">
                <span class="contact__workdays">9<sup>00</sup> - 21<sup>00</sup> без выходых</span>
                <p class="contact__number">+7 (495) 236-85-40</p>
                <a class="contact__call pay-more" href="#">Заказать звонок</a>
            </div>
            <div class="call">
                <img class="pay-more" src="img/telephone.png" alt="">
            </div>
            <div class="menu">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- home -->
    <div class="home">
        <div class="container">
            <h1 class="home-title">Душевые кабины из стекла <span class="gold">от 10000 руб</span></h1>
            <div class="home-form">
                <h4 class="home-form__title">Рассчитайте стоимость душевой кабины</h4>
                <div class="choice">
                    <div class="choice__tranparency">
                        <p class="caption ch">Прозрачность стекла:</p>
                        <input class="radio" type="radio" id="opaque" name="transparency" checked>
                        <label class="label" for="opaque"><span class="circle"></span> Матовое</label>
                        <br>
                        <input class="radio" type="radio" id="transparent" name="transparency">
                        <label class="label" for="transparent"><span class="circle"></span> Прозрачное</label>
                    </div>
                    <div class="choice__type">
                        <p class="caption ch">Тип стекла:</p>
                        <input class="radio" type="radio" id="usual" name="type" checked>
                        <label class="label" for="usual"><span class="circle"></span> Обычное</label>
                        <br>
                        <input class="radio" type="radio" id="optiwhite" name="type">
                        <label class="label" for="optiwhite"><span class="circle"></span> Optiwhite</label>
                    </div>
                </div>
                <div class="area clearfix">
                    <span class="caption">Площадь душевой кабины:</span>
                    <div class="area__input clearfix">
                        <span class="minus"></span>
                        <input class="inp" type="number" name="met" value="1" step="0.1" min="1" max="10000">
                        <p class="meter">м<sub>2</sub></p>
                        <span class="plus"></span>
                    </div>
                </div>
                <a href="#" class="btn" >Рассчитать</a>
            </div>
        </div>
    </div>
    <!-- home end -->

    <!-- advantages -->
    <div id="advantages" class="advantages box">
        <div class="container">
            <h2 class="big-title">Наши преимущества</h2>
            <div class="all-advantages">
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
    <!-- advantages end -->

    <!-- works -->
    <div id="works" class="works">
        <div class="container box">
            <h2 class="big-title">Наши работы</h2>
            <div class="slider clearfix">
                <div class="slide">
                    <div class="slide-img">
                        <img src="img/img-slider.jpg" alt="img-slider">
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
                        <button class="slide-info__btn pay-more">Хочу такое же</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <img src="img/img-slider.jpg" alt="img-slider">
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
                        <button class="slide-info__btn pay-more">Хочу такое же</button>
                    </div>
                </div>
                <div class="slide">
                    <div class="slide-img">
                        <img src="img/img-slider.jpg" alt="img-slider">
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
                        <button class="slide-info__btn pay-more">Хочу такое же</button>
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
    <div id="rates" class="rates box">
        <div class="container">
            <h2 class="big-title">Тарифы</h2>
            <div class="rates-info clearfix">
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
                    <button class="rates-btn pay-more">Хочу такое же</button>
                </div>
                <div class="rates-info__right">
                    <h3 class="rates-title">Стекло Optiwhite</h3>
                    <ul class="rates-list">
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
                    <div class="rates-price">
                        <span class="price-text">Стоимость:</span>
                        <span class="price-sum">19 300 <sub>руб.</sub></span>
                    </div>
                    <button class="rates-btn pay-more">Хочу такое же</button>
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
    <!-- rates end -->

    <!-- additional product -->
    <div class="products">
        <div class="container box">
            <h2 class="big-title">Дополнительная продукция</h2>
            <div class="all-products">
                <div class="all-products__block clearfix">
                    <div class="all-products__img big">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-bigimg1.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                    <div class="all-products__img">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-smallimg1.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                    <div class="all-products__img">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-smallimg2.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-products__block clearfix">
                    <div class="all-products__img">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-smallimg3.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                    <div class="all-products__img">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-smallimg4.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                    <div class="all-products__img">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-smallimg5.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                    <div class="all-products__img">
                        <div class="accord-header"><p>Скинали для кухни</p><img class="accord-header__img" src="img/plus.png" alt=""></div>
                        <div class="accord-content">
                            <img src="img/content-smallimg6.jpg" alt="">
                            <div class="img-hover">
                                <p>Модульные картины из стекла</p>
                                <button class="btn pay-more">Заказать замер</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-products__block clearfix">
                    <div class="all-products__moreinfo">
                        <p>Хотите узнать больше? <br>
                            Оставьте заявку и мы свяжемся с вами.</p>
                        <button class="btn pay-more">Узнать больше</button>
                    </div>
                    <div class="all-products__img right">
                        <img src="img/content-bigimg2.jpg" alt="">
                        <div class="img-hover">
                            <p>Модульные картины из стекла</p>
                            <button class="btn pay-more">Заказать замер</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- additional product end -->

    <!-- reviews -->
    <div id="reviews" class="reviews box">
        <div class="container">
            <h2 class="big-title">Отзывы</h2>
        </div>
        <div class="white-grain-big-left"></div>
        <div class="reviews-slide">
            <ul class="review-view">
                <li class="review-view__item">
                    <p class="review-title">Светлана</p>
                    <div class="hide">
                        <p class="review-text">Доброго времени суток! Хочу сказать команде Glasspower большое спасибо! за качество, за слаженность в работе, за профессионализм и за пунктуальность! вся работа от начала и до конца была выполнена на достойном уровне профессионалов. сначала выслала фото кухни и фото скинали, которые планировала. и очень быстро получила от Светланы фото моей кухни с фартуком. Дизайнер Ольга подобрала еще несколько вариантов возможных фото, помогла с выбором и внесла некоторые коррективы в конечный дизайн скинали. А замерщик Антон вовремя приехал, сделал замеры и дал все необходимые объяснения. само производство заняло не много времени, и когда позвонил Владимир на счет установки, я была несколько удивлена, тк скинали были готовы даже раньше срока, что конечно очень порадовало!!! установили отлично, качество очень понравилось!!!

                            Наша семья очень довольна нашей кухней, на которой яркой изюминкой и украшением являются скинали, которые создали в компании Glasspower! Спасибо вам большое за вашу КРАСИВУЮ работу!!!</p></div>
                    <div class="white-grain"></div>
                    <button class="hide-text">Развернуть отзыв</button>
                </li>
                <li class="review-view__item">
                    <p class="review-title">Светлана</p>
                    <div class="hide">
                        <p class="review-text">Доброго времени суток! Хочу сказать команде Glasspower большое спасибо! за качество, за слаженность в работе, за профессионализм и за пунктуальность! вся работа от начала и до конца была выполнена на достойном уровне профессионалов. сначала выслала фото кухни и фото скинали, которые планировала. и очень быстро получила от Светланы фото моей кухни с фартуком. Дизайнер Ольга подобрала еще несколько вариантов возможных фото, помогла с выбором и внесла некоторые коррективы в конечный дизайн скинали. А замерщик Антон вовремя приехал, сделал замеры и дал все необходимые объяснения. само производство заняло не много времени, и когда позвонил Владимир на счет установки, я была несколько удивлена, тк скинали были готовы даже раньше срока, что конечно очень порадовало!!! установили отлично, качество очень понравилось!!!

                            Наша семья очень довольна нашей кухней, на которой яркой изюминкой и украшением являются скинали, которые создали в компании Glasspower! Спасибо вам большое за вашу КРАСИВУЮ работу!!!</p></div>
                    <div class="white-grain"></div>
                    <button class="hide-text">Развернуть отзыв</button>
                </li>
                <li class="review-view__item">
                    <p class="review-title">Светлана</p>
                    <div class="hide">
                        <p class="review-text">Доброго времени суток! Хочу сказать команде Glasspower большое спасибо! за качество, за слаженность в работе, за профессионализм и за пунктуальность! вся работа от начала и до конца была выполнена на достойном уровне профессионалов. сначала выслала фото кухни и фото скинали, которые планировала. и очень быстро получила от Светланы фото моей кухни с фартуком. Дизайнер Ольга подобрала еще несколько вариантов возможных фото, помогла с выбором и внесла некоторые коррективы в конечный дизайн скинали. А замерщик Антон вовремя приехал, сделал замеры и дал все необходимые объяснения. само производство заняло не много времени, и когда позвонил Владимир на счет установки, я была несколько удивлена, тк скинали были готовы даже раньше срока, что конечно очень порадовало!!! установили отлично, качество очень понравилось!!!

                            Наша семья очень довольна нашей кухней, на которой яркой изюминкой и украшением являются скинали, которые создали в компании Glasspower! Спасибо вам большое за вашу КРАСИВУЮ работу!!!</p></div>
                    <div class="white-grain"></div>
                    <button class="hide-text">Развернуть отзыв</button>
                </li>
                <li class="review-view__item">
                    <p class="review-title">Светлана</p>
                    <div class="hide">
                        <p class="review-text">Доброго времени суток! Хочу сказать команде Glasspower большое спасибо! за качество, за слаженность в работе, за профессионализм и за пунктуальность! вся работа от начала и до конца была выполнена на достойном уровне профессионалов. сначала выслала фото кухни и фото скинали, которые планировала. и очень быстро получила от Светланы фото моей кухни с фартуком. Дизайнер Ольга подобрала еще несколько вариантов возможных фото, помогла с выбором и внесла некоторые коррективы в конечный дизайн скинали. А замерщик Антон вовремя приехал, сделал замеры и дал все необходимые объяснения. само производство заняло не много времени, и когда позвонил Владимир на счет установки, я была несколько удивлена, тк скинали были готовы даже раньше срока, что конечно очень порадовало!!! установили отлично, качество очень понравилось!!!

                            Наша семья очень довольна нашей кухней, на которой яркой изюминкой и украшением являются скинали, которые создали в компании Glasspower! Спасибо вам большое за вашу КРАСИВУЮ работу!!!</p></div>
                    <div class="white-grain"></div>
                    <button class="hide-text">Развернуть отзыв</button>
                </li>
                <li class="review-view__item">
                    <p class="review-title">Светлана</p>
                    <div class="hide">
                        <p class="review-text">Доброго времени суток! Хочу сказать команде Glasspower большое спасибо! за качество, за слаженность в работе, за профессионализм и за пунктуальность! вся работа от начала и до конца была выполнена на достойном уровне профессионалов. сначала выслала фото кухни и фото скинали, которые планировала. и очень быстро получила от Светланы фото моей кухни с фартуком. Дизайнер Ольга подобрала еще несколько вариантов возможных фото, помогла с выбором и внесла некоторые коррективы в конечный дизайн скинали. А замерщик Антон вовремя приехал, сделал замеры и дал все необходимые объяснения. само производство заняло не много времени, и когда позвонил Владимир на счет установки, я была несколько удивлена, тк скинали были готовы даже раньше срока, что конечно очень порадовало!!! установили отлично, качество очень понравилось!!!

                            Наша семья очень довольна нашей кухней, на которой яркой изюминкой и украшением являются скинали, которые создали в компании Glasspower! Спасибо вам большое за вашу КРАСИВУЮ работу!!!</p></div>
                    <div class="white-grain"></div>
                    <button class="hide-text">Развернуть отзыв</button>
                </li>
                <li class="review-view__item">
                    <p class="review-title">Светлана</p>
                    <div class="hide">
                        <p class="review-text">Доброго времени суток! Хочу сказать команде Glasspower большое спасибо! за качество, за слаженность в работе, за профессионализм и за пунктуальность! вся работа от начала и до конца была выполнена на достойном уровне профессионалов. сначала выслала фото кухни и фото скинали, которые планировала. и очень быстро получила от Светланы фото моей кухни с фартуком. Дизайнер Ольга подобрала еще несколько вариантов возможных фото, помогла с выбором и внесла некоторые коррективы в конечный дизайн скинали. А замерщик Антон вовремя приехал, сделал замеры и дал все необходимые объяснения. само производство заняло не много времени, и когда позвонил Владимир на счет установки, я была несколько удивлена, тк скинали были готовы даже раньше срока, что конечно очень порадовало!!! установили отлично, качество очень понравилось!!!

                            Наша семья очень довольна нашей кухней, на которой яркой изюминкой и украшением являются скинали, которые создали в компании Glasspower! Спасибо вам большое за вашу КРАСИВУЮ работу!!!</p></div>
                    <div class="white-grain"></div>
                    <button class="hide-text">Развернуть отзыв</button>
                </li>
            </ul>

        </div>
        <div class="white-grain-big-right"></div>
        <div class="container">
            <!--<div class="reviews-line"></div>-->
            <div class="reviews-hand"><img class="reviews-hand__img" src="img/hand.png" alt=""><span class="reviews-hand__text">Двигайте ползунок</span></div>
        </div>
    </div>
    <!-- reviews end -->

    <!-- footer-form -->
    <div class="footer-form">
        <div class="container">
            <div class="grain"></div>
            <div class="form-info">
                <h3 class="title">Узнайте сколько будет стоить стекло <br> для вашей ванной</h3>
                <form action="#" class="form clearfix" id="phone-form__footer" method="post">
                    <input type="text" class="input" placeholder="Введите ваше имя" name="ima_kl" minlength="2">
                    <input type="text" class="input margin-none phone" placeholder="Введите ваш телефон" name="telefon_lida">
                    <input type="submit" class="btn" value="Заказать бесплатный замер" name="send2">
                    <p class="rights">Отправляя заявку вы соглашаетесь с <a href="#" class="data-processing pop-up">обработкой данных</a></p>
                </form>
            </div>
        </div>
    </div>
    <!-- footer-form end -->

    <!-- footer -->
    <div id="footer" class="footer">
        <div class="container">
            <div class="footer-info clearfix">
                <div class="logo clearfix">
                    <div class="logo-img">
                        <a href="#"><img src="img/logo.png" alt="logo"></a>
                    </div>
                    <div class="logo-info">
                        <a class="logo-info__link" href="#">Frederiko.ru</a>
                        <p class="logo-info__text">Скинали и фартуки для кухни</p>
                    </div>
                </div>
                <address class="address clearfix">
                    <div class="address__img">
                        <img class="footer-img" src="img/placeholder.png" alt="">
                    </div>
                    <div class="address__text">
                        <span class="text">г.Москва БЦ "Вега" <br> (ул. Вербная, д.8с1, оф.207)</span>
                        <br>
                        <a class="link" href="mailto:a.semenova@remontexpress.ru">info@frederiko.ru</a>
                    </div>
                </address>
                <div class="work-hours clearfix">
                    <div class="work-hours__img">
                        <img class="footer-img" src="img/clock.png" alt="">
                    </div>
                    <div class="work-hours__text">
                        <span class="text">Мы работаем: <br> с 9 до 21 Без выходных</span>
                    </div>
                </div>
                <div class="back-to">
                    <div class="back-to__img">
                        <a class="scroll" href="#">
                            <img class="footer-img" src="img/back-to-top.png" alt="">
                        </a>
                    </div>
                    <div class="back-to__text">
                        <a class="scroll" href="#">
                            <span class="text">Вверх</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright clearfix">
                <a class="privacy-policy pop-up" href="#">Политика конфиденциальности</a>
                <p class="copyright">© "Frederiko.ru" 2014 - 2017. Все права защищены.</p>
            </div>
        </div>
    </div>
    <!-- footer end -->

    <!-- popups -->
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
    <div class="popup data-processing">
        <div class="container">
            <div class="close pop-up"></div>
            <h3 class="popup__header">Согласие на обработку персональных данных</h3>
            <p class="popup__text">г.Москва</p>
            <p class="popup__text">«15» февраля 2017 г.</p>
            <p class="popup__text">Этим документом я выражаю свое согласие на совершение Оператором* со всеми персональными данными, указанными мной при регистрации, а также теми, которые указаны в “Персональном кабинете”, таких действий: сбор, накопление, регистрация, хранение, изменение, обновление, использование и расширение (распространение, реализация, передача), уничтожение (дальше – Обработка).</p>
            <p class="popup__text">Обработка персональных данных может осуществляться Оператором на бумажном и/или электронном носителях с возможным использованием смешанной обработки: автоматизированной и неавтоматизированной.</p>
            <p class="popup__text">Целью сбора и обработки персональных данных является организация Оператором направления (отправки) на мой адрес специальных предложений, информации о новых товарах, услугах и рекламных акциях, иных действий, в рамках своей деятельности, а также выполнение Оператором своих обязательств передо мной, как покупателем товаров и/или услуг.</p>
            <p class="popup__text">Я соглашаюсь с тем, что Оператор может передавать мои персональные данные третьим лицам, если такая передача необходима для выполнения Оператором своих обязательств передо мной, как покупателем товаров и/или услуг, а также при обработке персональных данных.</p>
            <p class="popup__text">Я подтверждаю свое согласие со всем вышеизложенным, а также обязуюсь соблюдать правила Клубной программы, а также Пользовательского соглашения.</p>
            <p class="popup__text">Я подтверждаю свое согласие со всем вышеизложенным, а также обязуюсь соблюдать правила Клубной программы, а также Пользовательского соглашения.</p>
            <p class="popup__text">Оператор оставляет за собой право изменять правила Клубной программы, а также Политики конфиденциальности и Пользовательского соглашения по своему усмотрению.</p>
        </div>
    </div>
    <!-- popups end -->

    <!-- form -->
    <div class="payment">
        <div class="container">
            <div class="close pay"></div>
            <div class="form-info">
                <h3 class="title">Узнайте сколько будет стоить стекло <br> для вашей ванной</h3>
                <form action="#" class="form clearfix" id="phone-form__main" method="post">
                    <input type="text" class="input" placeholder="Введите ваше имя" name="ima_kl" value="<?php echo $_SESSION["ima_kl"] ?>">
                    <input type="text" class="input margin-none phone" placeholder="Введите ваш телефон" name="telefon_lida" value="<?php echo $_SESSION["telefon_lida"] ?>">
                    <input type="submit" class="btn" value="Получить расчет" name="send">
                    <p class="rights">Отправляя заявку вы соглашаетесь с <a href="#" class="data-processing pop-up">обработкой данных</a></p>
                </form>
            </div>
        </div>
    </div>
    <div class="payment-more">
        <div class="container">
            <div class="close pay-more"></div>
            <div class="form-info">
                <h3 class="title">Узнайте сколько будет стоить стекло <br> для вашей ванной</h3>
                <form action="#" class="form clearfix" id="phone-form__btn" method="post">
                    <input type="text" class="input" placeholder="Введите ваше имя" name="ima_kl" value="<?php echo $_SESSION["ima_kl"] ?>">
                    <input type="text" class="input margin-none phone" placeholder="Введите ваш телефон" name="telefon_lida" value="<?php echo $_SESSION["telefon_lida"] ?>">
                    <input type="submit" class="btn" value="Заказать звонок" name="send2">
                    <p class="rights">Отправляя заявку вы соглашаетесь с <a href="#" class="data-processing pop-up">обработкой данных</a></p>
                </form>
            </div>
        </div>
    </div>
    <div class="phone-menu">
        <div class="container">
            <div class="close phone"></div>
            <ul class="menu-list">
                <li class="menu-list__item active"><a href="#" class="menu-list__link scroll">Калькулятор</a></li>
                <li class="menu-list__item"><a href="#advantages" class="menu-list__link scroll">Преимущества</a></li>
                <li class="menu-list__item"><a href="#rates" class="menu-list__link scroll">Тарифы</a></li>
                <li class="menu-list__item"><a href="#works" class="menu-list__link scroll">Наши работы</a></li>
                <li class="menu-list__item"><a href="#reviews" class="menu-list__link scroll">Отзывы</a></li>
                <li class="menu-list__item"><a href="#footer" class="menu-list__link scroll">Контакты</a></li>
            </ul>
        </div>
    </div>
    <!-- form end -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="js/messages_ru.js"></script>
    <script src="js/mask.js"></script>
    <script src="js/myscroll.js"></script>
    <script src="js/sessvars.js"></script>
    <script src="js/script.js"></script>

</div>

</body>
</html>