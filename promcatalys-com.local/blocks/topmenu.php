<div class="topbar-container" style="z-index: 4">
    <div class="topbar" style="z-index: 4">
        <a href="./index.php"><button class="tbtn" style="z-index: 4">Home</button></a>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
        $location = 'topmenu';
        $query = $pdo->prepare($sql);
        $query->execute(array($location));
        
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='./articles.php?id=$row->id&location=topmenu#anchor'><button class='tbtn'>$row->name</button></a>";
        }
        ?>
        <a href='http://promcatalys.ru'><button class='tbtn'>  <img class="lng-pic" src="./img/ru.png" alt="Russian versoin">&nbsp;&nbsp;Russian</button></a>
    </div>
</div>