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
    <script src="./js/classlist.js"></script>
</head>

<body>
    
    
    <?php
    require_once './blocks/header.php';
    ?>
    <a id="anchor"></a>
    <?php
    require_once './blocks/topmenu.php';
    ?>
    <div class="main">
        <?php
        include './blocks/leftsidebar.php';
        ?>
        <div class="content">
            <h1 style="text-align: center; margin: auto"><?= $title ?></h1>
            <br>
            <div class='prodlist show'>
                <?php
                $sql = 'SELECT * FROM `production` WHERE `category` = :category ORDER BY `weight`';
                $query = $pdo->prepare($sql);
                $query->execute(array('category' => $category));

                while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                    echo "<div class='card'><div class='product hide-product'>
                        <div class='list-img' style='background: url(./img/prod/$row->img.jpg)'></div>
                        <div class='prod-title'>$row->title</div>
                        <div class='prod-text'>$row->text</div>
                        </div>
                    </div>";
                }
                ?>
            </div>
            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
        </div>
    </div>
    <script src="./js/script.js"></script>
    <div class="back">
        <div class="paralax paralax-l1"></div>
        <div class="paralax paralax-l2"></div>
        <div class="paralax paralax-l3"></div>
        
    </div>
    <script src="./js/back.js"></script>
    <?php
    require_once './blocks/footer.php';
    ?>

</body>

</html>