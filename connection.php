<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "mybooksdatabase");

// 1. Create a database connection
$dbcon = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
?>
