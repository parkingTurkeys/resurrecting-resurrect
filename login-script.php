<!DOCTYPE html>
<html lang="en">
<?php include "global.php" ?>
<head>
    <title>resurrecting resurrect</title>
    <!-- a lot of basic code is taken from resurrect.cx :3 -->
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta name="keywords" content="bulletin, board, free, forum">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./favicon.ico" type="image/x-icon">
</head>
<body>
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
                    $login_status = "Not logged in.";

                    echo $login_status;
                ?>
            </p>
        </div>
    </header>
    <main>
        </main>
    </body>
</html>
 