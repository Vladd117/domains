<div class="topbar-container" style="z-index: 4">
    <div class="topbar" style="z-index: 4">
        <a href="./index.php"><button class="tbtn" style="z-index: 4">Главная</button></a>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
        $location = 'topmenu';
        $query = $pdo->prepare($sql);
        $query->execute(array($location));
        
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='./articles.php?id=$row->id&location=topmenu#anchor'><button class='tbtn'>$row->name</button></a>";
        }
        ?>
        <a href='http://promcatalys.com'><button class='tbtn'>  <img class="lng-pic" src="./img/en.png" alt="English versoin">&nbsp;&nbsp;English</button></a>
    </div>
</div>