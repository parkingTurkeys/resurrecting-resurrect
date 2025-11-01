
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
                <p>
                    <?php
                        $login_status = "Not logged in.";

                        echo $login_status;
                    ?>
                </p>
            </div>
        </header>
        <main>
            <h2>Categories</h2>
                <?php 
                    include "secrets.php";
                    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                    $mysqli = mysqli_connect("$host", "$username", "$password", "$host", $port);
                    mysqli_set_charset($mysqli, 'utf8mb4');
                    
                        if (array_key_exists("category", $_GET)) {
                            $cate = (int)$_GET["category"];
                            
                        } else {
                            $cate = 0;
                        };
                        $viewable_categories = mysqli_query($mysqli, "SELECT * FROM categories WHERE parent=$cate");
                        $catstoshow_array = $viewable_categories->fetch_all(MYSQLI_ASSOC);
                        foreach ($catstoshow_array as $cat) {
                            echo '<div class = "category"><h3><a href="./index.php?category='. $cat["id"] . '">' . $cat["name"] . '</a></h3><p>' . $cat["description"] . '</p></div>';
                        };
                ?>
                <!-- time for the topics! -->
                <?php
                    /*
                    <h4><a href="/web/20250828114724/https://resurrect.cx/topic/3/">Nicto</a></h4>
                    <p>
                        <i>Started by: <b class="light-gray">vir</b></i>
                    </p>
                    */
                    $viewable_topics = mysqli_query($mysqli, "SELECT * FROM topics WHERE category=$cate");
                    $topicsstoshow_array = $viewable_topics->fetch_all(MYSQLI_ASSOC);
                    foreach ($topicsstoshow_array as $topic) {
                        echo '<div id = "topic"><h4><a href="topic.php?topic='. $topic["id"] . '">' . $topic["name"] . '</a></h3><p><i>Started by: <b class="light-gray">' . $topic["started_by"] . '</b></i></p></div>';
                    };
                ?>
                <!--
                <div class="category">
                <h3><a href="./index.php?category=N">Announcements</a></h3>
                <p>
                    Important news for the whole forum.
                </p>
                </div>
                
                <div class="category">
                <h3><a href="./index.php?category=N">The Jam</a></h3>
                <p>
                    Discussion of resurrect.cx's forum-wide jam.
                </p>
                </div>
            
            <hr>
            
            <div class="category">
                <h3><a href="./index.php?category=N">Archive</a></h3>
                <p>
                    Posts from before The Jam.<br>
                    <i><span class="gray">Children:</span> <b class="light-gray">Projects (Archive), Site Discussion (Archive), Advice (Archive)</b></i></p>
            </div>
            -->
  
</main>
    </body>
</html>
 