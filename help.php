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
                <a href="./help.php" class="button">Help</a>
                </div>
            </div>
            <div id="header_right">
                <p>Not logged in.</p>
            </div>
        </header>
        <main>
            <h2>Help</h2>
            <p><b>resurrect.cx</b> is a forum for a certain type of hacker.</p>
            <p>We do things differently. We do things that matter. We do things that change the way things are.</p>
            <p>
                The original forum was maintained by <b>rez</b> under oversight of <b><a href="https://hackclub.com/" target="_blank" rel="noopener noreferrer">Hack Club</a></b>.
            </p>
            <p>
                Now I [p-t] am trying to make a revived and functional version.
            </p>
            <p>If you need something, email me at <a href="mailto:p-t@hackclub.app">p-t [at] hackclub [dot] app</a>.</p>
        </main>
    </body>
</html>