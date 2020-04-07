<?php
session_start();
include("process.php");
if(isset($_REQUEST['sub'])){
    $username = $_REQUEST['name'];
    $password = $_REQUEST['pass'];
    $res = mysqli_query($mysqli,"select * from users where username='$username' and password='$password'");
    $result = mysqli_fetch_array($res);
    if($result)
    {
        $_SESSION["login"]="1";
        header("location:adminhome.php");
    }
    else
    {
        header("location:login.php?err=1");
    }
}
?>