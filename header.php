<header>
    <div class="banner">

    </div>
    <nav>
        <ul>
            <li><a href="index.php">Startseite</a></li>

            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='#'>Eintrag hinzufügen</a></li>";
                echo "<li><a href='./includes/logout.inc.php'>Logout</a></li>";
            }
            else {
                echo "<li><a href='./includes/login.inc.php'>Login</a></li>";
            }
            ?>

        </ul>
    </nav>
</header>


