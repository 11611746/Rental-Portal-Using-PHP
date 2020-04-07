<?php
session_start();
if(!isset($_SESSION["login"]))
{
    header("location:login.php");
}
?>
<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT * from record");
if(isset($_POST['search'])){
    $searchKey=$_POST['search'];
    $sql = "SELECT * from record WHERE name LIKE '%$searchKey%'";
}else
$sql = "SELECT * from record";
$result = mysqli_query($mysqli,$sql);
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
  color: #797979;
  border: 1px solid #6C63FF;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 95px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=text]:hover {background-color: #f4f2fe;
color: #797979;
}

input[type=mobile] {
  background-color: white;
  color: #797979;
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

input[type=mobile]:hover {background-color: #f4f2fe;
color: #797979;
}

input[type=area] {
  background-color: white;
  color: #797979;
  border: 1px solid #6C63FF;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 95px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 7%;
}

input[type=area]:hover {background-color: #f4f2fe;
color: #797979;
}

input[type=specification] {
  background-color: white;
  color: #797979;
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

input[type=specification]:hover {background-color: #f4f2fe;
color: #797979;
}

#choose {
  background-color: white;
  color: #797979;
  border: 1px solid #6C63FF;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 10%;
}

#choose:hover {background-color: #f4f2fe;
color: #797979;
}

input[type=rent] {
  background-color: white;
  color: #797979;
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

input[type=rent]:hover {background-color: #f4f2fe;
color: #797979;
}

#image{
  margin-right: 7%;
  padding: 40px;
  background-color: transparent;
  transition: transform .2s;
  width: 150px;
  height: 150px;
}

#image:hover{
  -ms-transform: scale(2.0); /* IE 9 */
  -webkit-transform: scale(2.0); /* Safari 3-8 */
  transform: scale(2.0); 
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
}

.button4:hover {background-color: #6961ff;
color: white;
font-family: 'poppins', sans-serif;
}


#customers {
  font-family: 'poppins', sans-serif;
  border-collapse: collapse;
  width: 60%;
  margin-left:20%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #ddd7ff;}

#customers tr:hover {background-color: #f4f2fe;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #6961ff;
  color: white;
}

#wav{
    position: fixed;
    height: 70%;
    margin-left: 62%;
    z-index: -1;
}

#an{
  font-size: 20px;
}


#edit {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 30px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 30px;
  font-size: 16px;
  margin-right: 7%;
  }

#edit:hover {background-color: #6961ff;
color: white;
font-family: 'poppins', sans-serif;
}

#delete {
  background-color: white;
  color: black;
  border: 2px solid #e7e7e7;
  border-radius: 30px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 30px;
  font-size: 16px;
  margin-right: 7%;
}

#delete:hover {background-color: #6961ff;
color: white;
font-family: 'poppins', sans-serif;
}


#h1{
    color: #d8d8d8;
    text-align: center;
    margin-bottom: 5%;
}

</style>
</head>
<body>
<a href="logout.php" id="an">Logout</a>
<h1 id="h1">Admin Panel</h1>
<img id="wav" src="img/undraw_file_analysis_8k9b.svg">
    <form id="form" action="database.php" method="POST" enctype="multipart/form-data">        
        Name<input type="text" name="name" value=""/>
        Contact Number<input type="mobile" name="mobile" value="" placeholder="+91"/>
        Location<input type="area" name="area" value="" placeholder="Street,Town,District,State"/>
        Specification<input type="specification" name="specification" value="" placeholder="1 BHK / 2 BHK / 3 BHK"/>
        Upload Image<input type="file" id="choose" name="uploadfile" value=""/>
        rent<input type="rent" name="rent" value="" placeholder="Rs"/>
        <input class="button button4" type="submit" name="submit" value="submit"/>
</form>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Location</th>
            <th>Specification</th>
            <th>Rent</th>
            <th>Image</th>
            <th>Update</th>
            <th>Remove</th>
        </tr>
        <?php
            while($res=mysqli_fetch_array($result)){
                echo "<tr>
                 <td>".$res['name']."</td>
                 <td>".$res['mobile']."</td>
                 <td>".$res['area']."</td>
                 <td>".$res['specification']."</td>
                 <td>".$res['rent']."</td>
                 <td><a href='$res[picsource]'><img src='".$res['picsource']."' heigh='100' width='100' id='image'/></a></td>
                 <td ><a href=\"edit.php?id=$res[id]\"><input type='submit' value='Edit' id='edit'></a></td>
                 <td ><a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure want to delete?')\"><input type='submit' value='Delete' id='delete'></a></td>
                 </tr>";
            }
        ?>
    </table><br>
</body>
</html>