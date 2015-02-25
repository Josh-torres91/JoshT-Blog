<?php
require_once(__DIR__ . "/../model/config.php");
?>
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
  <h1>Welcome!</h1>
  <p>This is JayBlog, the latest project in the App Academy!</p>
  <p><a class="btn btn-primary btn-lg" href="url: http://localhost:8383/Portfolio3JoshT/Index%20-%20PvIII.html" role="button">Learn more</a></p>
  <ul class="nav nav-pills">
    <li role="presentation"><a href="Register.php">Register</a></li>
    <li role="presentation"><a href="Index.php">Home</a></li>
    <li role="presentation" id="current-link" class="active"><a href="Login.php">Sign In</a></li>
</ul>
  
</div>

<h1>Sign In</h1>

<form method="post" action="<?php echo $path . "Controller/Create-user.php"; ?>">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
        <!--The input is named password
        so that you cant see the text that
        is typed.-->
    </div>
    <label>
        <input type="checkbox"> Remember me
    </label>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>

