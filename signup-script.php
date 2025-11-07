<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include "./global.php" ?>
<head>
    <title>resurrecting resurrect | SIGN UP</title>
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
            include "./setup.php";
            //check if username is in use
            $stmt = $mysqli->prepare("SELECT * FROM users WHERE username=?");
            $stmt->bind_param("s", $_POST["username"]);
            $stmt->execute();
            $user_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);
            
            if (is_null($user_info)) {
                //check email
                $stmt = $mysqli->prepare("SELECT * FROM users WHERE email=?");
                $stmt->bind_param("s", $_POST["email"]);
                $stmt->execute();
                $user_info = mysqli_stmt_get_result($stmt)->fetch_array(MYSQLI_ASSOC);
                if (is_null($user_info)) {
                    //check passwords the same
                    if ($_POST["password"] == $_POST["password-2"]) {
                        //create account
                        $hashed_pwd = password_hash($_POST["password"], PASSWORD_DEFAULT);
                        $date_today = date("YYYY-MM-DD");
                        $stmt = $mysqli->prepare("INSERT INTO users (username, email, password_hash, datejoined, colour) VALUES (?,?,?,?, 'FFFFFF'); ");
                        $stmt->bind_param("ssss", $_POST["username"], $_POST["email"],  $hashed_pwd, $date_today);
                        $stmt->execute();
                        echo "You are signed up! Thank you for joining the resurrect forums <3";
                    } else {
                        echo "<p>Your passwords do not match.</p>";
                    };
                } else {
                    echo "<p>That email is already in use. Please email me at p-t@hackclub.app if this is an issue.</p>";
                };
            } else {
                echo "<p>That username is already taken.</p>";
            };
        ?>
    </main>
</body>
</html>
 