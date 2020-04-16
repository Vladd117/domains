<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    require_once('./db/connectdb.php');
    $sql = 'SELECT * FROM `production` WHERE `category` = :category && `id` = :id';
    $category = $_GET['category'];
    $id = $_GET['id'];
    $query = $pdo->prepare($sql);
    $query->execute(['category' => $category, 'id' => $id]);

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
            <div class="prod-content">
                <div class="product-head">
                    <div class="prod-img" style='background: url(./img/prod/<?=$article->img?>.jpg)'></div>


                    <div class="product-title">
                        <?= $article->title ?>
                    </div>


                </div>

                <p><?= $article->text ?></p>




            </div>

        </div>
    </main>
    <?php
    require_once './blocks/footer.php';
    ?>
</body>

</html>