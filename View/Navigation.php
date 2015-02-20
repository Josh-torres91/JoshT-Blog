<html>
    <head>
        <title>JayBlog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://www.halopedia.org/images/0/05/Marathon_logo.jpg">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/Customization.css">

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <a id="current-link" href="Post.php">JayBlog</a>
            <a href="Register.php">Register</a>
            <a href="Login.php">Sign In</a>
    </body>

</html>

<?php
require_once (__DIR__ . "/../Model/Config.php");
?>
<nav>
    <ul>
        <li><a href="<?php echo $path . "Post.php" ?>">Blog Post Form</a></li>
    </ul>
</nav>