
<div class="leftside">
<div class="allbuttons">
    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text lbtext">Products</div>

        </button>
        <a href="./prodlist.php?category=rif&title=Reforming Catalysts#anchor">
            <div class="lbtn-sub-button"><button>Reforming Catalysts</button></div>
        </a>
        <a href="./prodlist.php?category=izom&title=Isomerization Catalysts#anchor">
            <div class="lbtn-sub-button"><button>Isomerization Catalysts</button></div>
        </a>
        <a href="./prodlist.php?category=go&title=Hydrotreating Catalysts#anchor">
            <div class="lbtn-sub-button"><button>Hydrotreating Catalysts</button></div>
        </a>
        <a href="./prodlist.php?category=gig&title=Hydrogenation Catalysts and Hydrocracking Catalysts#anchor">
            <div class="lbtn-sub-button"><button>Hydrogenation Catalysts and Hydrocracking Catalysts</button></div>
        </a>
        <a href="./prodlist.php?category=klaus&title=Claus Catalysts#anchor">
            <div class="lbtn-sub-button"><button>Claus Catalysts</button></div>
        </a>
        <a href="./prodlist.php?category=eco&title=Environmental Catalysts#anchor">
            <div class="lbtn-sub-button"><button>Environmental Catalysts</button></div>
        </a>
        <a href="./prodlist.php?category=nos&title=Catalyst Supports#anchor">
            <div class="lbtn-sub-button"><button>Catalyst Supports</button></div>
        </a>
        <a href="./prodlist.php?category=adsorb&title=Adsorbents and Dryers#anchor">
            <div class="lbtn-sub-button"><button>Adsorbents and Dryers</button></div>
        </a>
        
    </div>

    <!-- Animated button -->
    <div class="lbtn-container">
        <button class="lbtn-learn-more">
            <div class="lbtn-circle">
                <div class="lbtn-button-icon lbtn-rotate-450">></div>
            </div>
            <div class="lbtn-button-text2 lbtext">Technical &nbsp; &nbsp; &nbsp; Services</div>

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
            <div class="lbtn-button-text2 lbtext">Analytical &nbsp; &nbsp; &nbsp; Capacity</div>

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
       </div>
   
    <script src="./js/lsbutton.js"></script>
</div>