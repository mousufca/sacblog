<?php
include_once ('header.php');
?>

<div class="login-form">
    <h2 class="login-title"><b>Signup</b></h2>
    <form method="post">
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: users"></span>
                <input class="uk-input" type="text" name="name" placeholder="name" required>
            </div>
        </div>
        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon" uk-icon="icon: user"></span>
                <input class="uk-input" type="text" name="username" placeholder="username" required>
            </div>
        </div>

        <div class="uk-margin">
            <div class="uk-inline">
                <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                <input class="uk-input" type="password" name="password" placeholder="password" required>
            </div>
        </div>
        <input type="submit" value="Signup" name="signup" class="uk-button uk-button-primary">
        <a class="uk-button uk-button-primary" href="./login.php">Login</a>
    </form>
</div>

<?php
    if(isset($_POST['signup'])){
        $name=$_POST["name"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $qu="INSERT INTO users(name,username,password) VALUES('$name','$username','$password')";
        if($con->query($qu)){
            $_SESSION["username"]=$username;
            redirect('./');
        }
        else{
            echo "<script>alert('something went wrong')</script>";
        }
    }
?>