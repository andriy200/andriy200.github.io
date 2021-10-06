<?php
    echo $img;
    $folder = "about";
    $title = "Про нас";
    require "../php/header.php";
?>
<body>
    <div class="wrapper">
        <?php
            require "../php/headerSite.php";
        ?>
        <section class="main">
            <div class="mapSite">
                <a href="#admin" class="btnAside active">Адміністрація</a>
                <a href="#teacher" class="btnAside">Вчителі</a>
                <a class="btnAside">Історія школи</a>
                <a class="btnAside">Розклад уроків</a>
            </div>
            <div class="content">
                <div id="admin" class="contentItem active">
                    <div class="about">
                        <div class="contentTitle">Адміністрація</div>
                        <img src="img/admin.jpg" alt="" class="contentImg">
                        <div class="contentAdmin"></div>
                        </div>
                </div>
                <div id="teacher" class="contentItem">
                    <div class="about">
                        <div class="contentTitle">Вчителі</div>
                        <img src="img/admin.jpg" alt="" class="contentImg">
                        <div class="contentAdmin"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>