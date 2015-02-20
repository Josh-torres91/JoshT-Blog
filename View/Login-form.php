<?php
require_once(__DIR__ . "/../model/config.php");
?>

 <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <a id="current-link" href="Post.php">JayBlog</a>
            <a href="Register.php">Register</a>
            <a href="Login.php">Sign In</a>

<h1>Login</h1>

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
 
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>

