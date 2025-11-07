<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include "./global.php" ?>
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
    <?php include "./header.php"; ?>
    <main>
        <form action = "signup-script.php" method="post">
            <label for = "email">Email:</label><br />
            <input name = "email" id = "email" type = "email"><br />
            <label for = "username">Username:</label><br />
            <input name = "username" id = "username" type = "text"><br />
            <label for = "password">Password:</label><br />
            <input name = "password" id = "password" type = "password"><br />
            <label for = "password-2">Password Again:</label><br />
            <input name = "password-2" id = "password-2" type = "password"><br />
            <button type="submit">Sign Up</button>
        </form>
    </main>
</body>
</html>
 