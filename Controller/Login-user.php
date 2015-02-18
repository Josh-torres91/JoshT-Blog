<?php

require_once (__DIR__ . "/../model/config.php");

$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);


$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'");
// All info is stored in the query.
// It's stored as an array.
if ($query->num_rows == 1) {
    $row = $query->fetch_array();

    if ($row["password"] === crypt($password, $row["salt"])) {
        $_SESSION["authenticated"] = true;
        echo "<p>Login Successful!</p>";
        // The double equals sign checks
        // if what's on the left is equal
        // to what's on the right.
        // The triple equals sign checks
        // what the double equals checks
        // but also checks if the data is
        // of the same type.
    } else {
        echo "<p>Invalid username and password</p>";
    }
} else {
    echo "<p>Invalid username and password</p>";
}