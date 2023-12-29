<?php
$db_name = "pdotest";
$db_host = "localhost";
$db_user = "root";
$db_password = $db_user;

$pdo = new PDO("mysql:dbname={$db_name};host={$db_host}", "{$db_user}", "{$db_password}");