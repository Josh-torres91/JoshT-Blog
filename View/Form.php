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
require_once (__DIR__ . "/../model/config.php");
require_once (__DIR__ . "/../controller/login-verify.php");

if(!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die;
}

?>

<body>
<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/Create-post.php"; ?>">
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>
    </div>

    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
</form>
</body>