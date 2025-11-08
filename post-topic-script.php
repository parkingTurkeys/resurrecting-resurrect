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
                //INSERT INTO topics (name, started_by, category, is_locked) VALUES
                if (isset($_SESSION["logged_in"])) {
                    $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=?");
                    $stmt->bind_param("s", $_SESSION["user"]);
                    $stmt->execute();
                    $user_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);
                    if ($user_info["flag"] != 0x02) {
                        //first add the blank topic
                        $body = $_POST["body"];
                        $title = $_POST["title"];
                        $stmt = $mysqli->prepare("INSERT INTO topics (name, started_by, category, is_locked) VALUES (?,?,?,0)");
                        $stmt->bind_param("ssi", $title, $_SESSION["user"], $_GET["cate"]);
                        $stmt->execute();
                        //next add the top reply in the topic
                        $topic_id = $mysqli->query("SELECT LAST_INSERT_ID();")->fetch_column();
                        $stmt = $mysqli->prepare("INSERT INTO posts (body, author, topic) VALUES (?,?,?)");
                        $stmt->bind_param("ssi", $body, $_SESSION["user"], $topic_id);
                        $stmt->execute();
                    }
                    echo('<meta http-equiv="refresh" content="0;url=index.php?category=' . $_GET["cate"] .'">');
                } else {
                    echo "Sorry, you have to be logged in to do this!";
                };
            ?>
        </main>
    </body>
</html>