<html>
    <head>
        <title>JayBlog</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="http://www.halopedia.org/images/0/05/Marathon_logo.jpg">
        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/Customization.css">
</html>

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
    <div class="checkbox">
        <label>
            <input type="checkbox"> Remember me
        </label>
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