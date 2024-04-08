<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "dependent_select_box";
try {
    $con = new PDO("mysql:host=$mysql_db_hostname;dbname=$mysql_db_database", $mysql_db_user, $mysql_db_password);
} catch (PDOException $e) {
    // Handle the error gracefully, you may log it or show a user-friendly message
    echo "Connection failed: " . $e->getMessage();
}
