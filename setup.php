  <?php      include "secrets.php";
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = mysqli_connect("$host", "$username", "$password", "$host", $port);
        mysqli_set_charset($mysqli, 'utf8mb4');
?>