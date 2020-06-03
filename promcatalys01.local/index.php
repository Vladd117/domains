<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('./db/connectdb.php');
    $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
    $location = 'main';

    $query = $pdo->prepare($sql);
    $query->execute(array($location));

    $article = $query->fetch(PDO::FETCH_OBJ);

    $website_title = $article->title;
    require_once './blocks/head.php';
    ?>
</head>

<body>

    <?php
    require_once './blocks/header.php';

    require_once './blocks/topmenu.php';
    ?>
    <div class="main">
        <?php
        include './blocks/leftsidebar.php';
        ?>
        <div class="content">
            <div class="intro-box">
                <div class="intro-img"><img style="margin: 0" src="./intro_img/1.jpg"></div>
                <div class="intro-img"><img style="margin: 0" src="./intro_img/2.jpg"></div>
                <div class="intro-img"><img style="margin: 0" src="./intro_img/3.jpg"></div>
                <div class="intro-img"><img style="margin: 0" src="./intro_img/4.jpg"></div>
                <script src="./js/intro.js"></script>
            </div>
            <a href="./img/promcatalys-card.pdf" target="_blank" title="Карта партнера">
                <div class="p-card">
                    <div class="logo-pdf"></div>
                    <div class="p-text">Скачать карту партнера</div>
                </div>
            </a>

            <h1><?= $article->title ?></h1>
            <p><?= $article->text ?></p>


        </div>

    </div>
    <div class="back">
        <div class="paralax paralax-l1"></div>
        <div class="paralax paralax-l2"></div>
        <div class="paralax paralax-l3"></div>
        <script src="./js/back.js"></script>
    </div>
    <?php
    require_once './blocks/footer.php';
    ?>
</body>

</html>