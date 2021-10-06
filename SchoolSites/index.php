<?php
    $title = "Головна сторінка";
    $folder = "main";
    require "php/header.php";
?>
<body>
    <div class="wrapper">
        <section class="screen mainScreen">
            <div class="bgMainScreen">
                <img src="main/img/medium_200ce04ac1bb7012e703bd9d6e87038a.jpeg" alt="" class="bg">
            </div>
            <?php
                require "php/headerSite.php";
            ?>
        </section>
        <section class="screen contactScreen">
            <div class="bgScreen"></div>
            <div class="contact">
                <div class="adress">
                    <div class="textAdress">Наша адреса:</div>
                    <div class="adressSchool">вул. Космонавтів, 32</div>
                </div>
                <div class="phone">
                    <p class="phoneText">Телефонуйте за  номером:</p>
                    <p class="phoneNum">+380 (67) 505 - 03 - 37</p>
                </div>
            </div>
            <img src="main/img/schoolAir.jpg" alt="" class="bg">
        </section>


        <section class="screen informScreen">
            <div class="infromCard">
                
                <!-- Змінна картинка -->

                <img src="main/img/2017-12-15.jpg" alt="" class="imgCard" hspace="0">
                <div class="textCard">
                    <p class="titleSchool">Початкова школа</p>
                </div>
            </div>
            <div class="infromCard">
                <img src="main/img/2017-12-15.jpg" alt="" class="imgCard" hspace="0">
                <div class="textCard">
                    <p class="titleSchool">Початкова школа</p>
                </div>
            </div>
            <div class="infromCard">
                <img src="main/img/2017-12-15.jpg" alt="" class="imgCard" hspace="0">
                <div class="textCard">
                    <p class="titleSchool">Початкова школа</p>
                </div>
            </div>
            <div class="infromCard">
                <img src="main/img/2017-12-15.jpg" alt="" class="imgCard" hspace="0">
                <div class="textCard">
                    <p class="titleSchool">Початкова школа</p>
                </div>
            </div>
            <div class="infromCard">
                <img src="main/img/2017-12-15.jpg" alt="" class="imgCard" hspace="0">
                <div class="textCard">
                    <p class="titleSchool">Початкова школа</p>
                </div>
            </div>
            <div class="infromCard">
                <img src="main/img/2017-12-15.jpg" alt="" class="imgCard" hspace="0">
                <div class="textCard">
                    <p class="titleSchool">
                        Початкова школа
                    </p>
                </div>
            </div>
        </section>


        <section class="screen screenStatic">
            <div class="static">
                <div class="zno">
                    <div class="text znoText">Середній бал ЗНО</div>
                    <div class="text mark">188</div>
                </div>
                <div class="student">
                    <div class="text quanityStudent">Кількість учнів</div>
                    <div class="text quanity">1500</div>
                </div>
                <div class="travel">
                    <div class="textTravel"></div>
                </div>
            </div>
        </section>
        
        <section class="screen newsScreen">
            <div class="newsBlock">

                <!-- class="news" База даних -->
                <div class="news">
                    <img src="main/img/SchoolTour.jpg" alt="" class="imgNews">
                    <div class="text titleNews">Тури по Україні</div>
                    <div class="text reviewNews">Туристичний оператор "Бомба-тур" запрошує всіх у триденну подорож трохи відпочити від буденності і поринути в красу українських Карпат!чого цікавого... До зустрічі у турі:)</div>
                </div>
                <div class="news">
                    <img src="main/img/SchoolSport.jpg" alt="" class="imgNews">
                    <div class="text titleNews">Тури по Україні</div>
                    <div class="text reviewNews">tyjyjyxjykuuuuuuuuxktuuuuuuu</div>
                </div>
                <div class="news">
                    <img src="main/img/SchoolArts.jpg" alt="" class="imgNews">
                    <div class="text titleNews">Виступ дітей до Дня Незалежності України</div>
                    <div class="text reviewNews"></div>
                </div>
            </div>
            <div class="btn">
                <div class="textBlock">
                    <p class="text">Дізнатись більше</p>
                    <img src="main/img/down-arrow.svg" alt="" class="btnArrow">
                </div>
            </div>
        </section>

        <section class="screen greetingScreen">
            <img src="main/img/logo.jpg" alt="" class="symbolSchool">
            <p class="directorText">Вітаю на сайті нашої школи-гімназії №23 м. Вінниці - сучасного навчального закладу, що є світом знань, гармонії та любові, в якому приємно вчитись і працювати. За всю історію свого існування педагоги школи з честю виконували свій обов’язок – навчати і виховувати національну еліту, формувати різнобічно розвинену і соціально активну особистість.</p>
        </section>
        <?php
            require "php/footer.php";
        ?>
    </div>

    <section class="regScreen ">
            <div class="skeleton">
                <div class="regBody">
                    <div class="close">
                        X
                    </div>
                    <div class="regTitle">
                        Увійти
                    </div>
                    <form action="#" class="regForm">
                    <input type="text" class="input login" placeholder="Логін" maxlength="24">
                    <input type="password" class="input pass" placeholder="Пароль" maxlength="45">
                    <div class="regBtn">
                        <a href="" type="submit" class="submit">Увійти</a>
                        <a href="#" class="forgetPass">забули пароль</a>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script src="main/js/jquery-3.6.0.min.js"></script>
    <script src="main/js/script.js"></script>
 </body>
</html>