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
            <?php
                //INSERT INTO posts (body, author, topic) VALUES
                if (isset($_SESSION["logged_in"])) {
                    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=?");
                    $stmt->bind_param("s", $_SESSION["user"]);
                    $stmt->execute();
                    $user_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);
                    if ($user_info["flag"] != 0x02) {
                        $body = $_POST["body"];
                        $stmt = $mysqli->prepare("INSERT INTO posts (body, author, topic) VALUES (?,?,?)");
                        $stmt->bind_param("ssi", $body, $_SESSION["user"], $_GET["topic"]);
                        $stmt->execute();
                    }
                    echo('<meta http-equiv="refresh" content="0;url=topic.php?topic=' . $_GET["topic"] .'">');
                } else {
                    echo "Sorry, you have to be logged in to do this!";
                };
            ?>
        </main>
    </body>
</html>