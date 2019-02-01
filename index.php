<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт под ключ</title>
    <meta name="description"
          content="Ремонт под ключ от компании Семидар">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/url.min.js"></script>
    <link href="img/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet/less" href="css/style.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>
</head>
<body>


<div id="kalkulator">
    <div class="stickerCall">
        <div class="circlephone" style="transform-origin: center;">
        </div>
        <div class="circle-fill" style="transform-origin: center;">
        </div>
        <div class="img-circle" style="transform-origin: center;">
            <div class="img-circleblock" style="transform-origin: center;">
            </div>
        </div>
    </div>
    <div class="callWind">
        <div class="close">
            <img src="img/sticker/whiteCross.png" alt="">
        </div>
        <div class="title">
            <img src="img/sticker/callTrubka.png" alt="">
            <p>
                Мы вам перезвоним!
            </p>
        </div>
        <form action="" method="post" id="callForm">
            <input type="text" name="name" placeholder="Ваше имя">
            <input type="text" name="phone" placeholder="+38(___)___-__-__" required>
            <input type="hidden" name="utm_term" value="">
            <input type="hidden" name="utm_source" value="">
            <input type="hidden" name="utm_medium" value="">
            <input type="hidden" name="utm_campaign" value="">
            <input type="hidden" name="utm_content" value="">
            <input type="hidden" name="type" value="Заказ звонка">
            <input type="submit" value="Заказать звонок"> 
        </form>
        <div class="ourself">
            Или перезвоните нам сами
            <a href="tel:+380952762262">+380 (95) 276-22-62</a>
        </div>
    </div>
    <form action="mail.php" method="post" onsubmit="" id="kalkulatorForm">
        <div class="screen" id="screen1">
            <header>
                <div class="container">
                    <a href="tel:+380952762262‬" class="tel"><img src="img/mts.png" alt="">+380 (95) <span>276-22-62</span></a>
                    <img src="img/logo.png" alt="">
                    Узнайте предварительную стоимость ремонта и получите персональную скидку 5%
                    <a href="tel:+380952762262‬" class="mobtel" style="display: none"><img src="img/mts.png" alt="">+380 (95) 276-22-62</a>
                </div>
            </header>
            <div class="container">
                <div class="startPlashka">
                    <div class="centerSide">
                                                <p class="question">Ремонт квартир «под ключ»<br> Узкопрофильные специалисты, 5 лет гарантии на все виды работ<br> Без предоплаты</p>                        <div class="sticker-center">
                            <p> Ответьте на 6 вопросов и получите скидку до <span>5%!</span> </p>
                            <p>Вы экономите время менеджера - мы экономим Ваши деньги!</p>
                        </div>
                    </div>
                    <div class="startQuest">
                        <p>Получить промокод</p>
                    </div>
                    <!--<div class="carousel">-->
                        <!--<div class="owl-carousel">-->
                            <!--<div>-->
                                <!--<img src="img/slider/logos/1.jpg" alt="">-->
                            <!--</div>-->
                            <!--<div>-->
                                <!--<img src="img/slider/logos/2.jpg" alt="">-->
                            <!--</div>-->
                            <!--<div>-->
                                <!--<img src="img/slider/logos/3.jpg" alt="">-->
                            <!--</div>-->
                            <!--<div>-->
                                <!--<img src="img/slider/logos/4.jpg" alt="">-->
                            <!--</div>-->
                            <!--<div>-->
                                <!--<img src="img/slider/logos/5.jpg" alt="">-->
                            <!--</div>-->
                            <!--<div>-->
                                <!--<img src="img/slider/logos/6.jpg" alt="">-->
                            <!--</div>-->
                        <!--</div>-->
                    <!--</div>-->
                    <div class="zayKolvo">
                        <p class="unp">Semidar Chernigov</p>


                        <p>сегодня обработано<span>
                              <?php
                              $time = file_get_contents('./time.txt');
                              echo $time;
                              ?>                 </span>
                                заявок
                            </p>

                            <p class="unpmob" style="display: none">Semidar Chernigov</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- Где менять окна -->
        <div class="screen" style="display: none" id="screen2">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                        </div>

                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Где собираетесь делать ремонт?
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="gorod">
                                        <p class="imgBlock gorod"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="gorod" value="Квартира" checked data-sale="2">
                                            Квартира
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="zagorod">
                                        <p class="imgBlock zagorod"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="zagorod" value="Дом / Коттедж" data-sale="2">
                                            Дом / Коттедж
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="kommerch">
                                        <p class="imgBlock kommerch"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="kommerch" value="Офис" data-sale="2">
                                            Офис
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="Other">
                                        <p class="imgBlock other"></p>
                                        <p>
                                            <input type="radio" name="housePlace" id="Other" value="Другое" data-sale="2">
                                            Другое
                                        </p>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="sale-status">
                            <p class-"sale-title">Размер вашей скидки:<p class="barText"></p><span>%</span></p>
                            <div class="sale-bar">
                                <div class="bar">
                                    <div class="bar-inner"></div>
                                </div>
                                <span class="sale-min">0 %</span>
                                <span class="sale-max">5 %</span>
                            </div>
                        </div>
                        <div class="shag">Шаг 1</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Куда установить окна -->
        <div class="screen" style="display: none" id="screen3">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                        </div>

                    </nav>
                    <div class="plashka">
                        <p class="question">
                            У вас уже есть дизайн проект?
                        </p>
                        <!--<div class="description">-->
                            <!--От места установки зависят технические характеристики окон<br>-->
                            <!--(количество камер в профиле, толщина стеклопакета, специальная фурнитура)-->
                        <!--</div>-->
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="zhilaya">
                                        <p class="imgBlock zhilaya"></p>
                                        <p>
                                            <input type="radio" name="WwindowPlace[]" id="zhilaya" value="Да" data-sale="3">
                                            Да
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="kuhnya">
                                        <p class="imgBlock kuhnya"></p>
                                        <p>
                                            <input type="radio" name="WwindowPlace[]" id="kuhnya" value="Нет" data-sale="3">
                                            Нет
                                        </p>
                                    </label>
                                </li>

                            </ul>
                        </div>
                        <div class="sale-status">
                            <p class-"sale-title">Размер вашей скидки:<p class="barText"></p><span>%</span></p>
                            <div class="sale-bar">
                                <div class="bar">
                                    <div class="bar-inner"></div>
                                </div>
                                <span class="sale-min">0 %</span>
                                <span class="sale-max">5 %</span>
                            </div>
                        </div>
                        <div class="shag">Шаг 2</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Особенности квартиры -->
        <div class="screen" style="display: none" id="screen4">
            <div class="tabletView">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                        </div>

                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Уточните особенности помещения
                        </p>
                        <div class="quest">
                            <div class="hometype">
                                <div class="name">Тип помещения</div>
                                <ul>
                                    <li>
                                        <input type="radio" name="homeConstruction" id="panel" value="новостройка">
                                        <label for="panel">Новостройка</label>
                                    </li>
                                    <li>
                                        <input type="radio" name="homeConstruction" id="karkas" value="вторичное жилье">
                                        <label for="karkas">Вторичное жилье</label>
                                    </li>

                                    <li>
                                        <input type="radio" name="homeConstruction" id="drugoe" value="Другое/не знаю">
                                        <label for="drugoe">Другое</label>
                                    </li>
                                </ul>
                            </div>

                            <div class="flatEtazh">
                                <div class="name">Укажите площадь помещения</div>
                                <div class="rightPart">
                                    <p>кв.м.</p>
                                    <input type="text" name="flatEtazh">
                                </div>
                                <div class="slider"></div>
                                <img src="img/etazhi.png" alt="">
                            </div>
                        </div>
                        <div class="sticker">
                            <img src="img/consultant.png" alt="">
                            <p>
                                По этим параметрам опытный консультант подберёт необходимый уровень звуко-
                                и теплоизоляции, фурнитуру
                                и комплектацию окон.
                            </p>
                        </div>
                        <div class="sale-status">
                            <p class-"sale-title">Размер вашей скидки:<p class="barText"></p><span>%</span></p>
                            <div class="sale-bar">
                                <div class="bar">
                                    <div class="bar-inner"></div>
                                </div>
                                <span class="sale-min">0 %</span>
                                <span class="sale-max">5 %</span>
                            </div>
                        </div>
                        <div class="shag">Шаг 3</div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <div class="screen" style="display: none" id="screen7">
            <div class="tabletview">
                <div class="container">
                    <nav class="navigation">
                        <div class="container">
                            <p class="next mobNav" style="display: none">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                            <p class="prev mobNav" style="display: none">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="prev">
                                <img src="img/prev.png" alt="">
                                Предыдущий шаг
                            </p>
                            <p class="next">
                                Следующий шаг
                                <img src="img/next.png" alt="">
                            </p>
                        </div>
                    </nav>
                    <div class="plashka">
                        <p class="question">
                            Необходимость перепланировки:
                        </p>
                        <div class="quest">
                            <ul>
                                <li>
                                    <label for="rehau">
                                        <p class="imgBlock rehau"></p>
                                        <p>
                                            <input type="radio" name="WwindowProfil[]" id="rehau" value="Да" data-sale="10">
                                            Да
                                        </p>
                                    </label>
                                </li>
                                <li>
                                    <label for="KBE">
                                        <p class="imgBlock KBE"></p>
                                        <p>
                                            <input type="radio" name="WwindowProfil[]" id="KBE" value="Нет" data-sale="10">
                                            нет
                                        </p>
                                    </label>
                                </li>

                            </ul>

                        </div>
                        <div class="sale-status">
                            <p class-"sale-title">Размер вашей скидки:<p class="barText"></p><span>%</span></p>
                            <div class="sale-bar">
                                <div class="bar">
                                    <div class="bar-inner"></div>
                                </div>
                                <span class="sale-min">0 %</span>
                                <span class="sale-max">5 %</span>
                            </div>
                        </div>
                        <div class="shag">Шаг 5</div>
                        <div class="consult">
                            <img src="img/stickerConsult.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="openNextStep"><p>Далее</p></div>
            </div>
        </div>
        <!-- Дополнительная комплектация -->
        <!--<div class="screen" style="display: none" id="screen7">-->
            <!--<div class="tabletview">-->
                <!--<div class="container">-->
                    <!--<nav class="navigation">-->
                        <!--<div class="container">-->
                            <!--<p class="next mobNav" style="display: none">-->
                                <!--Следующий шаг-->
                                <!--<img src="img/next.png" alt="">-->
                            <!--</p>-->
                            <!--<p class="prev mobNav" style="display: none">-->
                                <!--<img src="img/prev.png" alt="">-->
                                <!--Предыдущий шаг-->
                            <!--</p>-->
                            <!--<p class="prev">-->
                                <!--<img src="img/prev.png" alt="">-->
                                <!--Предыдущий шаг-->
                            <!--</p>-->
                            <!--<p class="next">-->
                                <!--Следующий шаг-->
                                <!--<img src="img/next.png" alt="">-->
                            <!--</p>-->
                        <!--</div>-->

                    <!--</nav>-->
                    <!--<div class="plashka">-->
                        <!--<p class="question">-->
                            <!--Дополнительная комплектация окна-->
                        <!--</p>-->
                        <!--<div class="quest">-->
                            <!--<ul>-->
                                <!--<li>-->
                                    <!--<label for="otkosy">-->
                                        <!--<p class="imgBlock otkosy"></p>-->
                                        <!--<p>-->
                                            <!--<input type="checkbox" name="WwindowDopkomplekt[]" id="otkosy" value="Откосы" checked>-->
                                            <!--Откосы-->
                                        <!--</p>-->
                                    <!--</label>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<label for="otlivy">-->
                                        <!--<p class="imgBlock otlivy"></p>-->
                                        <!--<p>-->
                                            <!--<input type="checkbox" name="WwindowDopkomplekt[]" id="otlivy" value="Отливы">-->
                                            <!--Отливы-->
                                        <!--</p>-->
                                    <!--</label>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<label for="podokonnik">-->
                                        <!--<p class="imgBlock podokonnik"></p>-->
                                        <!--<p>-->
                                            <!--<input type="checkbox" name="WwindowDopkomplekt[]" id="podokonnik" value="Подоконник" checked>-->
                                            <!--Подоконники-->
                                        <!--</p>-->
                                    <!--</label>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<label for="zamok">-->
                                        <!--<p class="imgBlock zamok"></p>-->
                                        <!--<p>-->
                                            <!--<input type="checkbox" name="WwindowDopkomplekt[]" id="zamok" value="Ручки с замком">-->
                                            <!--Ручки с замком-->
                                        <!--</p>-->
                                    <!--</label>-->
                                <!--</li>-->
                                <!--<li>-->
                                    <!--<label for="laminacya">-->
                                        <!--<p class="imgBlock laminacya"></p>-->
                                        <!--<p>-->
                                            <!--<input type="checkbox" name="WwindowDopkomplekt[]" id="laminacya" value="Ламинация">-->
                                            <!--Ламинация-->
                                        <!--</p>-->
                                    <!--</label>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</div>-->
                        <!--<div class="sale-status">-->
                            <!--<p class-"sale-title">Размер вашей скидки:<p class="barText"></p><span>%</span></p>-->
                            <!--<div class="sale-bar">-->
                                <!--<div class="bar">-->
                                    <!--<div class="bar-inner"></div>-->
                                <!--</div>-->
                                <!--<span class="sale-min">0 %</span>-->
                                <!--<span class="sale-max">5 %</span>-->
                            <!--</div>-->
                        <!--</div>-->
                        <!--<div class="shag">Шаг 6</div>-->
                    <!--</div>-->
                <!--</div>-->
                <!--<div class="openNextStep"><p>Узнать стоимость окон</p></div>-->
            <!--</div>-->
        <!--</div>-->

        <!-- Процесс подбора окна и расчёта стоимости -->
        <div class="screen" style="display: none"  id="screen9">
            <div class="tabletView">
                <div class="container">
                    <div class="plashka">
                        <p class="question">
                            Спасибо за ваши ответы!
                        </p>
                        <div class="quest">
                            <div class="cssload-container">
                                <div class="cssload-ex"></div>
                                <div class="cssload-ex"></div>
                                <div class="cssload-ex"></div>
                                <div class="cssload-ex"></div>
                            </div>
                            <div class="animatedText">
                                <p class="first">
                                    Оценка необходимого уровня теплоизоляции...
                                </p>
                                <p class="second" style="display: none">
                                    Просчёт вариантов конфигураций ...
                                </p>
                                <p class="third" style="display: none">
                                    Просчёт дополнительных параметров...
                                </p>
                                <p class="last" style="display: none">
                                    Готово!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Форма -->
        <div class="screen" style="display: none"  id="screen10">
            <div class="container">
                <div class="plashka">
                    <p class="question">
                        Поздравляем! Вы получаете скидку <span>5 %</span> на ремонт!
                    </p>
                    <div class="quest">
                        <label for="phone">Вы сэкономили время менеджера и заработали персональную скидку на услуги компании Семидар! Для закрепления за Вами скидки, оставьте свой номер телефона.</label>
                        <div class="name">
                            <img src="img/man.png" alt="">
                            <input type="text" name="name" id="name" placeholder="Ваше имя">
                        </div>
                        <div class="phone">
                            <img src="img/phone.png" alt="">
                            <input type="text" name="phone" id="phone" placeholder="+38(___)___-__-__">
                            <p class="alert" style="display: none;">Введите корректный номер телефона</p>

                        </div>
                        <!-- <div class="vnimanie">Внимание! Срок действия акции ограничен! </div> -->
                    </div>
                    <div class="itogBtn">
                        <input type="hidden" name="type" value="Калькулятор">
                        <input type="hidden" name="sale" value="">
                        <input type="hidden" name="utm_term" value="">
                        <input type="hidden" name="utm_source" value="">
                        <input type="hidden" name="utm_medium" value="">
                        <input type="hidden" name="utm_campaign" value="">
                        <input type="hidden" name="utm_content" value="">
                        <input type="button" value="Получить промокод!">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="showAllBlocks"></div>

        <script>
            $("input[name=utm_term]").val("");
            $("input[name=utm_source]").val("");
            $("input[name=utm_medium]").val("");
            $("input[name=utm_campaign]").val("");
            $("input[name=utm_content]").val("");
        </script>

</body>
</html>