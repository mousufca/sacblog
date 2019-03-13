<?php
    require_once ('db.php');
    require_once ('sessions.php');
    require_once ('functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/uikit.min.css">
    <link rel="stylesheet" href="./css/uikit-rtl.min.css">
    <link rel="stylesheet" href="./css/user.css">
    <script src="./js/uikit.min.js"></script>
    <script src="./js/uikit-icons.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAC BLOG</title>
</head>
<body>
    <nav class="uk-navbar-container" uk-navbar="mode: click" uk-sticky>
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="./">SAC BLOG</a>
            <ul class="uk-navbar-nav main-nav">
                <li><a href="./">Home</a></li>
                <li><a href="./about.php">About</a></li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav">
                <?php
                    if(isset($_SESSION["username"])) {
                        echo "<li><a href=\"./logout.php\">Logout</a></li>";
                        echo "<li><a href=\"./admin/posts.php\">My Posts</a></li>";
                        echo "<li><a href=\"./admin/addpost.php\">Add Post</a></li>";
                    }
                    else{
                        echo "<li><a href=\"./login.php\">Login</a></li>";
                        echo "<li><a href=\"./signup.php\">SignUp</a></li>";
                    }
                ?>
            </ul>
        </div>
    </nav>

