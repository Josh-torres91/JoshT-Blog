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
require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form class="form-inline">
    <div class="form-group">
        <label class="sr-only" for="exampleInputEmail3">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label class="sr-only" for="exampleInputPassword3">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Sign in</button>
</form>

<!--<form method="post" action="<?php echo $path . "controller/Create-user.php"; ?>">
    <div>
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>

    <div>
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password"/>
        The input is named password
        so that you cant see the text that
        is typed.
    </div>

    <div>
        <button type="submit">Submit</button>
    </div>
</form>-->