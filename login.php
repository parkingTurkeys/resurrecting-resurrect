<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include "./global.php" ?>
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
        <?php include "./header.php"; ?>
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