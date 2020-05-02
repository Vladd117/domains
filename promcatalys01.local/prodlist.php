<!DOCTYPE html>
<html lang="ru">

<head>
    <?php
    require_once('./db/connectdb.php');
    $category = $_GET['category'];
    $title = $_GET['title'];

    $website_title = $title;
    require_once './blocks/head.php';
    ?>
    <script src="./js/closes.js"></script>
</head>

<body>
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
            <div class="content">
                <h1 style="text-align: center; margin: auto"><?= $title ?></h1>
                <br>
                <div class='prodlist show'>
                    <?php
                    $sql = 'SELECT * FROM `production` WHERE `category` = :category';
                    $query = $pdo->prepare($sql);
                    $query->execute(array('category' => $category));

                    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                        echo "</a><div class='product anim-product'>
                        <div class='list-img' style='background: url(./img/prod/$row->img.jpg)'></div>
                        <div class='prod-title'>$row->title</div>
                        <div class='prod-text'>$row->text</div>
                    </div>";
                    }
                    ?>
                </div>

                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
            </div>

        </div>
    </div>
    <script src="./js/script.js"></script>
    <script src="./js/lsbutton.js"></script>
    <?php
    require_once './blocks/footer.php';
    ?>
    
</body>

</html>