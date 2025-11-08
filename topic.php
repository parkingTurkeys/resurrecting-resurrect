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
        <?php
        $logged_in = false;
        include "./setup.php";
        if (array_key_exists("topic", $_GET)) {
            $topic = (int)$_GET["topic"];
            
        } else {
            echo('<meta http-equiv="refresh" content="0;url=404.php">');
        }

        //get topic name owo
        $stmt = $mysqli->prepare("SELECT * FROM topics WHERE id=?");
        $stmt->bind_param("i", $topic);
        $stmt->execute();
        $topic_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);

        echo "<h4>Topic: " . $topic_info["name"] . "</h4>"
        ?>
        <hr />
        <?php
            //replies
            /*
            <div class="reply"><p><b style="color: #fff">[author]</b> <img src="/flags/moderator.png" title="moderator"><i class="grey"><small>(#[id])</small></i></p>[body]</div>
            */
            $stmt = $mysqli->prepare("SELECT * FROM posts WHERE topic=?");
            $stmt->bind_param("i", $topic);
            $stmt->execute();
            $posts_arrays = mysqli_stmt_get_result($stmt)->fetch_all(MYSQLI_ASSOC);


            $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=?");
            foreach ($posts_arrays as $post) {
                $stmt->bind_param("s", $post["author"]);
                $stmt->execute();
                $user_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);
                if (isset($user_info)) {
                    if (is_null($user_info["flag"]) != true ) {
                        switch ($user_info["flag"]) {
                            case 0x00:
                                $flag_img = '<img src="/flags/moderator.png" title="moderator">';
                                break;
                            case 0x01:
                                $flag_img = '<img src="/flags/legacy.png" title="archived">';
                                break;
                            default:
                                $flag_img = "";
                                break;
                        }
                    } else {
                        $flag_img = "";
                    }
                    echo '<div class="reply"><p><b style="color: #' . $user_info["colour"] . '">' . $post["author"] . '</b> ' . $flag_img . ' <i class="grey"><small>(#' . $post["id"] . ')</small></i></p>' . $post["body"] . '</div>';
                } else {
                    echo '<div class="reply"><p><b style="color: #FFFFFF">' . $post["author"] . '</b> <img src="/flags/legacy.png" title="archived"> <i class="grey"><small>(#' . $post["id"] . ')</small></i></p>' . $post["body"] . '</div>';
            }
            }
        ?>
        <?php
            //now to make the "this topic is locked" or "login to reply"
            if ($topic_info["is_locked"] == 0x01) {
                echo '<hr /><i><span class="grey">Locked by <b class="light-grey">'. $topic_info["locked_by"] . '</b>.</span></i><hr />';
            } elseif (isset($_SESSION["logged_in"])) {
                //add post form here
                //$_SESSION["topic"] = $topic_info["id"];
                echo
                '<hr /><form action = "post-reply-script.php?topic='. $topic_info["id"]. '" method="post">
                <label for = "body">Type your reply here:</label><br />
                <textarea name = "body" id = "body" ></textarea><br />
                <button type="submit">Send Reply</button>
                </form><hr />';

            } else {
                //when not logged in
                echo '<hr /><i class="gray"><a href = "login.php">Log in</a> to reply.</i><hr />';
            }
        ?>
    </main>

</body>
</html>