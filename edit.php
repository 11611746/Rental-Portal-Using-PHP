<?php
include("config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli,"select * from record where id=$id");
while($res=mysqli_fetch_array($result)){

    $name=$res['name'];
    $mobile=$res['mobile'];
    $area=$res['area'];
    $specification=$res['specification'];
    $rent=$res['rent'];
    

}
?>

<?php
if(Isset($_POST['update'])){

    $id = $_POST['id'];
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $area=$_POST['area'];
    $specification=$_POST['specification'];
    $rent=$_POST['rent'];
    if(isset($_FILES["uploadfile"]['name']) && ($_FILES["uploadfile"]['name']!="")){

    $filename = $_FILES["uploadfile"]['name'];
    $tempname = $_FILES["uploadfile"]['tmp_name'];
    $folder = "student/".$filename;
    unlink("student/$old_image");
    move_uploaded_file($tempname,$folder);
    }
    else{
      $filename=$old_image;
    }

    $result = mysqli_query($mysqli,"update record set name='$name',mobile='$mobile',area='$area',specification='$specification',rent='$rent',picsource='student/$filename' where id=$id");
    if($result){

        echo "Data updated successfully";
        header("location:adminhome.php");
    }
    else{
        echo "failed";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
#form{
    margin-left: 3%;
    margin-bottom: 80px;
    padding: 30px;
    border: 2px solid #6C63FF;
    border-radius: 30px;
}
input[type=text] {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 95px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=text]:hover {background-color: #6961ff;
color: white;
}

input[type=mobile] {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 30px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=mobile]:hover {background-color: #6961ff;
color: white;
}

input[type=area] {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 95px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=area]:hover {background-color: #6961ff;
color: white;
}

input[type=specification] {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 30px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=specification]:hover {background-color: #6961ff;
color: white;
}

#choose {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 10%;
}

#choose:hover {background-color: #6961ff;
color: white;
}

input[type=rent] {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 30px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=rent]:hover {background-color: #6961ff;
color: white;
}

#h1{
    color: #d8d8d8;
    text-align: center;
}

.button {
  background-color: #4CAF50; 
  border: none;
  color: white;
  padding: 12px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  margin-top: 10%;
}
.button4 {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 30px;
  margin-left: 33%;
}

.button4:hover {background-color: #6961ff;
color: white;
font-family: 'poppins', sans-serif;
}

#wav{
    position: fixed;
    height: 70%;
    margin-left: 62%;
    z-index: -1;
}

#an{
  font-size: 20px;
  margin-right: 4%;
}

#ann{
  font-size: 20px;
  margin-right: 100%;
}


</style>
</head>
<body>
<a href="adminhome.php" id="ann">Back</a>
<a href="logout.php" id="an">Logout</a>
<img id="wav" src="img/undraw_online_articles_79ff.svg">
<h1 id="h1">Update Details</h1>
<form id="form" action="" method="POST" enctype="multipart/form-data">
        
        Name<input type="text" name="name" value="<?php echo $name; ?>">
        Contact Number<input type="mobile" name="mobile" value="<?php echo $mobile; ?>">
        Location<input type="area" name="area" value="<?php echo $area; ?>">
        Specification<input type="specification" name="specification" value="<?php echo $specification; ?>">

        

        Upload Image<input type="file" id="choose" name="uploadfile" value="<?php echo $folder; ?>"/>
        rent<input type="rent" name="rent" value="<?php echo $rent; ?>">
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <input class="button button4" type="submit" name="update" value="update">
</form>
</body>
</html>