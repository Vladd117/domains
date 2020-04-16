<!DOCTYPE html>
<html>

<head>
    <?php
    $website_title = "Блог";
    require_once('./blocks/head.php');
    ?>
</head>

<body>
    <?php
    require_once('./blocks/header.php');
    ?>
    <main class="container mt-5">
        <div class="row">
            <div class="col-md-8 mb-3">
                Основная часть
            </div>
            <?php
            require_once('./blocks/aside.php');
            ?>
        </div>

    </main>

    <?php
    require('./blocks/footer.php');
    ?>


</body>

</html>