<html>
    <head>
        <title>JayBlog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://www.halopedia.org/images/0/05/Marathon_logo.jpg">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="Customization.css">
</html>

<nav class="navbar navbar-inverse navbar-fixed-top">
            <a id="current-link" href="Post.php">JayBlog</a>
            <a href="Register.php">Register</a>
            <a href="Login.php">Sign In</a>
</nav>

<?php
require_once(__DIR__ . "/controller/login-verify.php");
require_once(__DIR__ . "/view/header.php");
if(authenticateUser()) {
    require_once(__DIR__ . "/view/navigation.php");
}
require_once(__DIR__ . "/controller/create-db.php");
require_once(__DIR__ . "/view/footer.php");
require_once(__DIR__ . "/controller/Read-posts.php");
?>; 
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>