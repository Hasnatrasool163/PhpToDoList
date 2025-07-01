<?php
include "database.php";
session_start();
if($_SESSION["u_mail"]==true){
    echo "";
}else{
    header("location:login.php");
}
if(isset($_POST["edit_profile"])){
    $user_id=$_POST["id"];
    $user_name=$_POST["username"];
    $user_mail=$_POST["email"];
    $user_password=$_POST["password"];

    $query = "UPDATE users SET username='$user_name',email='$user_mail',password='$user_password' WHERE id='$user_id'";
    $result = mysqli_query($connect,$query);
    if($result){
        header("location:updation_logout.php");
    }else{
        echo "Profile Not Updated. Try again";
    }
}
?>