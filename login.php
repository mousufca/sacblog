<?php
include_once ('header.php');
?>

<div class="login-form">
    <h2 class="login-title"><b>Login</b></h2>
    <form method="post">
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
        <input type="submit" value="Login" name="login" class="uk-button uk-button-primary">
        <a class="uk-button uk-button-primary" href="./signup.php">SignUp</a>
    </form>
</div>


<?php
    if (isset($_POST['login'])){
        global $con;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $qur="SELECT * FROM users where username='$username'";
        $res=$con->query($qur);
        if($res->num_rows>0){
            $data=$res->fetch_array();
            if($password == $data["password"]){
                redirect('./index.php');
                $_SESSION["username"]=$username;
                $_SESSION["name"]=$data["name"];
            }
            else{
                echo "<script>alert('wrong password')</script>";
            }
        }
        else{
            echo "<script>alert('invalid username')</script>";
        }
    }

?>
