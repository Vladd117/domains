<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    require_once('./db/connectdb.php');
    $sql = 'SELECT * FROM `production` WHERE `category` = :category && `id` = :id';
    $category = $_GET['category'];
    $id = $_GET['id'];
    $query = $pdo->prepare($sql);
    $query->execute(array('category' => $category, 'id' => $id));

    $article = $query->fetch(PDO::FETCH_OBJ);

    $website_title = $article->title;
    require_once './blocks/head.php';
    ?>
</head>

<body>
<div class="back">
        <div class="paralax paralax-l1"></div>
        <div class="paralax paralax-l2"></div>
        <div class="paralax paralax-l3"></div>
        
    </div>
    <script src="./js/back.js"></script>
    <?php
    require_once './blocks/header.php';
    ?>
    <a id="anchor"></a>
    <?php
    require_once './blocks/topmenu.php';
    ?>

    <div class="bg">

        <div class="main">
            <?php
            include './blocks/leftsidebar.php';
            ?>
            <div class="prod-content">

                <div class="product-head">
                    <div class="prod-img" style='background: url(./img/prod/<?= $article->img ?>.jpg)'></div>


                    <div class="product-title">
                        <?= $article->title ?>
                    </div>


                </div>

                <p><?= $article->text ?></p>




            </div>

        </div>
    </div>
    <?php
    require_once './blocks/footer.php';
    ?>
</body>

</html>