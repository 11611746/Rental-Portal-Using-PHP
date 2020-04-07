<?php
include("config.php");
$msg = "";
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $area=$_POST['area'];
        $specification=$_POST['specification'];
        $rent=$_POST['rent'];

        $filename = $_FILES["uploadfile"]['name'];
        $tempname = $_FILES["uploadfile"]['tmp_name'];
        $folder = "student/".$filename;
        move_uploaded_file($tempname,$folder);
       

        $result=mysqli_query($mysqli,"INSERT into record values('','$name','$mobile','$area','$specification','$rent','$folder')");

        if($result){
            $msg = "Data uploaded successfully";
            header("location:adminhome.php");
        }
        else{
            echo "Failed";
        }
    }

    ?>