<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli,"Delete from record where id=$id");
if($result){
    header("location:adminhome.php");
}
else{
    echo "failed";
}
?>