<html>
    <head>
        <title>JayBlog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://www.halopedia.org/images/0/05/Marathon_logo.jpg">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/Customization.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
</html>

<div class="jumbotron">
  <h1>Welcome to JayBlog!</h1>
  <p>This is JayBlog, the latest project in the App Academy!</p>
  <p><a class="btn btn-primary btn-lg" href="url: http://localhost:8383/Portfolio3JoshT/Index%20-%20PvIII.html" role="button">Learn more</a></p>
  <ul class="nav nav-pills">
    <li role="presentation" id="current-link" class="active"><a href="Register.php">Register</a></li>
    <li role="presentation"><a href="Index.php">Home</a></li>
    <li role="presentation"><a href="Login.php">Sign In</a></li>
</ul>
</div>

<?php
require_once(__DIR__ . "/view/Header.php");
require_once(__DIR__ . "/view/Register-form.php");
require_once(__DIR__ . "/view/Footer.php");

header("Location: " . $path . "index.php");
