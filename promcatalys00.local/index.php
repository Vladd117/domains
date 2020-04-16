<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    require_once('./db/connectdb.php');
    $sql = 'SELECT * FROM `articles` WHERE `location` = :location';
    $location = 'main';
    
    $query = $pdo->prepare($sql);
    $query->execute(['location' => $location]);

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
    <main class="bg">

        <div class="main">
            <?php
            include './blocks/leftsidebar.php';
            ?>
            <div class="content">

                <h1><?= $article->title ?></h1>
                <p><?= $article->text ?></p>


            </div>

        </div>
    </main>
    <?php
    require_once './blocks/footer.php';
    ?>
</body>

</html>