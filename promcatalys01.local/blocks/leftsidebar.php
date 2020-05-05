
<div class="leftside">

    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text lbtext">Продукция</div>

        </button>
        <a href="./prodlist.php?category=rif&title=Катализаторы риформинга#anchor">
            <div class="lbtn-sub-button"><button>Катализаторы риформинга</button></div>
        </a>
        <a href="./prodlist.php?category=izom&title=Катализаторы изомеризации#anchor">
            <div class="lbtn-sub-button"><button>Катализаторы изомеризации</button></div>
        </a>
        <a href="./prodlist.php?category=go&title=Катализаторы гидроочистки#anchor">
            <div class="lbtn-sub-button"><button>Катализаторы гидроочистки</button></div>
        </a>
        <a href="./prodlist.php?category=gig&title=Катализаторы гидрирования и гидрокрекинга#anchor">
            <div class="lbtn-sub-button"><button>Катализаторы гидрирования и гидрокрекинга</button></div>
        </a>
        <a href="./prodlist.php?category=klaus&title=Катализаторы процесса Клауса#anchor">
            <div class="lbtn-sub-button"><button>Катализаторы процесса Клауса</button></div>
        </a>
        <a href="./prodlist.php?category=eco&title=Экологические катализаторы#anchor">
            <div class="lbtn-sub-button"><button>Экологические катализаторы</button></div>
        </a>
        <a href="./prodlist.php?category=nos&title=Носители для катализаторов#anchor">
            <div class="lbtn-sub-button"><button>Носители для катализаторов</button></div>
        </a>
        <a href="./prodlist.php?category=adsorb&title=Адсорбенты и осушители#anchor">
            <div class="lbtn-sub-button"><button>Адсорбенты и осушители</button></div>
        </a>
        
    </div>

    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text2 lbtext">Технический сервис</div>

        </button>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
        $location = 'techservice';
        $query = $pdo->prepare($sql);
        $query->execute(array($location));
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='./articles.php?id=$row->id&location=$row->location#anchor'><div class='lbtn-sub-button'><button>$row->name</button></div></a>";
        }

        ?>

    </div>

    <!-- Animated button -->
    <!-- <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text">Переработка</div>

        </button>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
        $location = 'processing';
        $query = $pdo->prepare($sql);
        $query->execute(array($location));

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='./articles.php?id=$row->id&location=$row->location#anchor'><div class='lbtn-sub-button'><button>$row->name</button></div></a>";
        }

        ?>

    </div> -->
    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text2 lbtext">Аналитическая база</div>

        </button>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = ?';
        $location = 'analytics';
        $query = $pdo->prepare($sql);
        $query->execute(array($location));

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='./articles.php?id=$row->id&location=$row->location#anchor'><div class='lbtn-sub-button'><button>$row->name</button></div></a>";
        }

        ?>

    </div>
    <!-- <div class="lbtn-sub-button"><button>$row->name</button></div>
        <div class="lbtn-sub-button"><button>Изомеризации</button></div>
        <div class="lbtn-sub-button"><button>Клауса</button></div>
        <div class="lbtn-sub-button"><button>Экологические</button></div>
        <div class="lbtn-sub-button"><button>Носители</button></div> -->
    <!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>&nbsp; -->
    <script src="./js/lsbutton.js"></script>
</div>