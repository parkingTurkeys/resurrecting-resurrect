<header>
        <div id="header_left">
        <h1><a href="index.php">resurrect.cx</a></h1>
            <p id="news">
                <b>News:</b>
                    <span>
                        <?php echo $announce ?>
                        <br>
                        – p-t
                    </span>
            </p>
            <p>Sign-ups are <b>closed.</b></p>
            <div>
                <a href="./help" class="button">Help</a>
            </div>
        </div>
        <div id="header_right">
            <p>
                <?php
                    include "setup.php";
                    $login_status = "Not logged in.";
                    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
                        $login_status = "Logged in as <b>" . $_SESSION["user"] . "</b>";
                    }
                    echo $login_status;
                ?>
            </p>
        </div>
    </header>