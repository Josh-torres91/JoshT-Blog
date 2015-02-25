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

<div class="jumbotron" id="JumboInd">
  <h1>Hello Internet!</h1>
  <p>This is JayBlog, the latest project in the App Academy!</p>
  <p><a class="btn btn-primary btn-lg" href="Index - PvIII.html" role="button">Learn more</a></p>
  <ul class="nav nav-pills">
    <li role="presentation"><a href="Register.php">Register</a></li>
    <li role="presentation" id="current-link" class="active"><a href="Index.php">Home</a></li>
    <li role="presentation"><a href="Login.php">Sign In</a></li>
</ul>

</div>

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