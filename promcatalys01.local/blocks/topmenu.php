<?php


?>

<div class="topbar-container">
    <div class="topbar">
        <a href="./index.php"><button class="tbtn">Главная</button></a>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
        $location = 'topmenu';
        $query = $pdo->prepare($sql);
        $query->execute(array($location));
        
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='./articles.php?id=$row->id&location=topmenu#anchor'><button class='tbtn'>$row->name</button></a>";
        }
        ?>
    </div>
</div>