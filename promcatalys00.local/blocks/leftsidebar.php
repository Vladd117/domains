<div class="leftside">

    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text">Продукция</div>

        </button>
        <a href='../prodlist.php?category=rif&title=Катализаторы риформинга'><div class="lbtn-sub-button"><button>Катализаторы риформинга</button></div></a>
        <div class="lbtn-sub-button"><button>Катализаторы изомеризации</button></div>
        <div class="lbtn-sub-button"><button>Катализаторы процесса Клауса</button></div>
        <div class="lbtn-sub-button"><button>Экологические катализаторы</button></div>
        <div class="lbtn-sub-button"><button>Носители для катализаторов</button></div>
    </div>

    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text2">Технический сервис</div>

        </button>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = :location';
        $location = 'techservice';
        $query = $pdo->prepare($sql);
        $query->execute(['location' => $location]);

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='../articles.php?id=$row->id&location=$row->location'><div class='lbtn-sub-button'><button>$row->name</button></div></a>";
        }

        ?>

    </div>

    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text">Переработка</div>

        </button>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = :location';
        $location = 'processing';
        $query = $pdo->prepare($sql);
        $query->execute(['location' => $location]);

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='../articles.php?id=$row->id&location=$row->location'><div class='lbtn-sub-button'><button>$row->name</button></div></a>";
        }

        ?>

    </div>
    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text2">Аналитическая база</div>

        </button>
        <?php
        $sql = 'SELECT * FROM `articles` WHERE `location` = :location';
        $location = 'analytics';
        $query = $pdo->prepare($sql);
        $query->execute(['location' => $location]);

        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            echo "<a href='../articles.php?id=$row->id&location=$row->location'><div class='lbtn-sub-button'><button>$row->name</button></div></a>";
        }

        ?>

    </div>
    <!-- <div class="lbtn-sub-button"><button>$row->name</button></div>
        <div class="lbtn-sub-button"><button>Изомеризации</button></div>
        <div class="lbtn-sub-button"><button>Клауса</button></div>
        <div class="lbtn-sub-button"><button>Экологические</button></div>
        <div class="lbtn-sub-button"><button>Носители</button></div> -->

</div>