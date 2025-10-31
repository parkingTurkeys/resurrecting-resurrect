<!DOCTYPE html>
<?php include "global.php" ?>
<html>
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
        <!-- the base code here is from resurrect.cx -->
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
            </div>
        </header>
        <main>
            <form action = "login-script.php" method="post">
                <label for = "username">Username:</label><br />
                <input name = "username" id = "username" type = "text"><br />
                <label for = "password">Password:</label><br />
                <input name = "password" id = "password" type = "password"><br />
                <label for = "stay_signed_in">Check this box to stay signed in:</label>
                <input name = "stay_signed_in" id = "stay_signed_in" type = "checkbox"><br />
                <button type="submit">Login</button>
            </form>
        </main>
    </body>