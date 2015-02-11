<?php

require_once(__DIR__ . "/database.php");
session_start();


$path = "/JoshT-Blog/";

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";


if (!isset($_SESSION["connection"])) {
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}
// If the session variable isn't set, the connection
//  variable ceases to exist.