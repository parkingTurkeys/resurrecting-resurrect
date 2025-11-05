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
        <?php
            $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=?");
            $stmt->bind_param("s", $_POST["username"]);
            $stmt->execute();
            $user_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);
            if (password_verify($_POST["password"], $user_info["password_hash"])) {
                echo "you're logged in as <b>";
                //session_start();
                $_SESSION["user"] = $_POST["username"];
                $_SESSION["logged_in"] = true;
                echo $_SESSION["user"];
                echo "</b>!";
            } else {
                echo "incorrect user or password...";
            }
        ?>
    </main>
</body>
</html>
 