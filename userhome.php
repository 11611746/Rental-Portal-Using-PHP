<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT * from record");
if(isset($_POST['search'])){
    $searchKey=$_POST['search'];
    $search=$_POST['searchh'];
    $sql = "SELECT * from record WHERE area LIKE '%$searchKey%' AND specification LIKE '%$search%'";
}else
$sql = "SELECT * from record";  
  $result = mysqli_query($mysqli,$sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>

#form{
  margin-left: 41%;
    margin-bottom: 80px;
    padding: 20px;
    margin-top: 3%;
    border: 2px solid #6C63FF;
    border-radius: 30px;
}

input[type=text] {
  background-color: white;
  color: #797979;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 95px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 5%;
}

input[type=text]:hover {background-color: #f4f2fe;
color: #797979;
}

input[type=txt] {
  background-color: white;
  color: #797979;
  border: 2px solid #e7e7e7;
  border-radius: 8px;
  padding-top: 10px;
  padding-bottom: 10px;
  padding-left: 30px;
  padding-right: 95px;
  font-family: 'poppins', sans-serif;
  font-size: 16px;
  margin-bottom: 5%;
}

input[type=txt]:hover {background-color: #f4f2fe;
color: #797979;
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
  width: 50%;
  margin-left:25%;
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

#image{
  margin-right: 17%;
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


#wav{
    position: fixed;
    height: 35%;
    left: 0;
    bottom: 0;
    z-index: -1;
}
.link{
  font-family: 'poppins', sans-serif;
}
#wa{
    position: fixed;
    height: 30%;
    right: 0;
    z-index: -1;
}
#an{
  font-size: 20px;
  margin-right: 100%;
}


#h1{
    color: #d8d8d8;
    text-align: center;
}

#searchside{
  width: 150px;
  padding-left: 40px;
}

#text1{
    position: fixed;
    margin-top: 7%;
    height: 50%;
    left: 0;
    z-index: -1;
}


#text2{
    position: fixed;
    height: 52%;
    right: 0;
    bottom: 0;
    z-index: -1;
    padding-top: 1%;
}

#text22{
    position: fixed;
    height: 50%;
    right: 0;
    bottom: 1;
    z-index: -1;
}

#form2{
  margin-left: 25%;
    margin-bottom: 30px;
    padding: 10px;
    margin-top: 3%;
    border: 2px solid #6C63FF;
    border-radius: 30px;
}
#Ankit{
  text-align: center;
  color: #797979;
}

#form3{
  margin-left: 56%;
    margin-bottom: 30px;
    padding: 10px;
    border: 2px solid #797979;
    border-radius: 30px;
    background: #ffffff;
    background: #f4f2fe;
}
#maninder{
  text-align: center;
  border-radius: 50px;
}

#form4{
  margin-left: 25%;
    margin-bottom: 30px;
    padding: 10px;
    border: 2px solid #6C63FF;
    border-radius: 30px;
    background: #f4f2fe;
}

#pic{
  margin-left: 35%;
  border-radius: 50px;
}

#form5{
  margin-left: 56%;
    margin-bottom: 30px;
    padding: 10px;
    border: 2px solid #797979;
    border-radius: 30px;
    background: #ffffff;
}
#maninder{
  text-align: center;
}

#hr{
  margin-top: 5%;
  margin-bottom: 5%;
  margin-left: 25%;
  width: 50%;
  background-color: #797979;
}

#propertybook{
    color: #797979;
    text-align: left;
    padding-left:  2%;
}

#contact{

  margin-left: 30%;
  height: 250px;
  width: 250px;
}
#form6{
  margin-top: 2%;
  margin-left: 41%;
    margin-bottom: 5%;
    padding: 20px;
    border: 2px solid #797979;
    border-radius: 30px;
    background: transparent;
    text-align: center;
    background: #f4f2fe;
}
#picture{
 
  height: 300px;
  width: 300px;
}
#con{
  color: #797979;

}
</style>
</head>
<body>

<a href="home.php" id="an" class="link">Home</a>
<h1 id="propertybook">PropertyBook</h1>
<img id="wa" src="img/undraw_quite_town_mg2q.svg">
<img id="text1" src="img/text1.png">
<h1 id="h1">Search Your Space</h1>
<form id="form" action="" method="POST">
        <input type="text" name="search" placeholder="Enter Location">
        <input type="txt" name="searchh" placeholder="Enter BHK">
        <button class="button button4">Search</button>
        <img id="searchside" src="img/undraw_under_construction_46pa.svg">
    </form><br><br>

    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Location</th>
            <th>Specification</th>
            <th>Rent</th>
            <th>Image</th>
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
                  </tr>";
            }
        ?>
    </table>
    <hr id="hr">
    <h2 id="h1">What Do People Say About Us?</h2>
    <img id="wav" src="img/undraw_sharing_articles_t5aa.svg">
    <img id="text2" src="img/text22.png">
    <img id="text22" src="img/text2.png">

    <form id="form2" action="" method="POST">
    <img class="avatar" id="pic"src="img/undraw_male_avatar_323b.png">
    <h3 id="Ankit">Ankit</h3>
    <h4><h1>"</h1>PropertyBook can convert dream home into reality.</h4>
  </form>
  <form id="form3" action="" method="POST">
    <img class="avatar" id="pic"src="img/undraw_female_avatar_w3jk.png">
    <h3 id="maninder">Maninder Kaur</h3>
    <h4><h1>"</h1>The constant touch through other true calls really suprised me.</h4>
  </form>
  <form id="form4" action="" method="POST">
    <img class="avatar" id="pic"src="img/undraw_male_avatar_323b.png">
    <h3 id="Ankit">Anand Kumar</h3>
    <h4><h1>"</h1>Thanks PropertyBook for giving me so many options with travel time search.</h4>
  </form>
  <form id="form5" action="" method="POST">
    <img class="avatar" id="pic"src="img/undraw_female_avatar_w3jk.png">
    <h3 id="maninder">Anita Jhammat</h3>
    <h4><h1>"</h1>PropertyBook made my life easy. It helped me with the search for my first ever investment i.e. 1BHK apartment. </h4>
  </form>
  <hr id="hr"> 
  <h2 id="h1">Contact Us</h2>
  <p>
  <form id="form6" action="" method="POST">
    <img class="avatar" id="picture"src="img/undraw_personal_info_0okl.svg">
    <h4 id="con">propertybookteam@gmail.com</h4>
    <h4 id="con">1800-224567, 1800-225401</h4>
    <h4 id="con"> city mall, greater noida, delhi</h4>
    </form>    
</p>
</body>
</html>