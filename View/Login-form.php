<?php
require_once(__DIR__ . "/../model/config.php");
?>

 <body>

<div class="jumbotron">
  <h1>Well hello Internet!</h1>
  <p>This is JayBlog, the latest project in the App Academy!</p>
  <p><a class="btn btn-primary btn-lg" href="http://localhost:8383/Portfolio3JoshT/Index%20-%20PvIII.html" role="button">Learn more</a></p>
  <ul class="nav nav-pills">
    <li role="presentation"><a href="Register.php">Register</a></li>
    <li role="presentation" id="current-link" class="active"><a href="Index.php">Home</a></li>
    <li role="presentation"><a href="Login.php">Sign In</a></li>
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
 
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>

