
<!DOCTYPE html>
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
                    hello! this is an unfinished version of a resurrected resurrect
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
                <p>Not logged in.</p>
            </div>
        </header>
        <main>
            <h2>Categories</h2>
                <?php 
                    include "secrets.php";
                    $connect = mysqli_connect("resurrect", "root", "$password", "resurrect", 3306);
                    echo($connect);
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
 