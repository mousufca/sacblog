<?php

    require_once ('db.php');
    require_once ('sessions.php');
/**
 * Created by PhpStorm.
 * User: MOUSUF  C A
 * Date: 10-03-2019
 * Time: 09:41
 */
function redirect($loc){
    header('Location:./'.$loc);
}
function loginvalidate($username,$password){
    global $con;
    $qur="SELECT * FROM users where username='$username'";
    $res=$con->query($qur);
    if($res->num_rows>0){
        $data=$res->fetch_array();
        if($password == $data["password"]){
            redirect('./index.php');
        }
        else{
            errors("Wrong Password");
        }
    }
    else{
        errors("Invalid Username");
    }
}
?>