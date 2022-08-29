<?php

$servername="localhost";
$username="root";
$password="";
$dbname="trip";

$con = mysqli_connect($servername,$username,$password,$dbname);

if(!$con){
    die("connection to the database failed due to" . mysqli_connect_error());

}
//echo "success connect to the db";
if(isset($_POST['upload'])){
$fname = $_POST ['faname'];
$lname = $_POST ['laname'];
$mob = $_POST ['maob'];
$mail = $_POST ['maail'];
 $pass = $_POST ['paass'];
 

$sql="INSERT INTO `freedom` ( `fname`, `lname`, `mob`, `mail`, `pass`) VALUES ( '$fname', '$lname', '$mob', '$mail', '$pass');";

//echo $sql;
// INSERT INTO `freedom` ( `fname`, `lname`, `mob`, `mail`, `pass`) VALUES ( '$fname', '$lname', '$mob', '$mail', '$pass');


if($con->query($sql)==true){
    // echo"successfully inserted";

}
else{
    echo "ERROR:$sql <br> $con->error";
}
  $con->close();


}
echo '<script>alert("Congratulations! You have successfully register.");history.go(-1);</script>';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> trip registraton</title>
    <link rel="stylesheet" href="logo.css">
</head>
<body>
    <div class="container">
        <h1 class="head">FORM FOR REGISTRATION</h1>
        <p class="para">
         Fill The Following Information
        </p>
        <form action="login.php" method="post" name="form">
        <div class="information">
        FIRST NAME:<input autocomplete="off" type="text" name="faname" id="name" placeholder="enter first name"><br><br>
        LAST NAME:<input autocomplete="off" type="text" name="laname" id="name" placeholder="enter last name"><br><br>
        MOBILE NO:<input autocomplete="off" type="number" name="maob" id="name" placeholder="enter mobile no "><br><br>
       EMAIL ID: <input autocomplete="off" type="email" name="maail" id="name" placeholder="enter email id"><br><br>
       PASSWORD: <input autocomplete="off" type="password" name="paass" id="name" placeholder="enter your password"><br><br>
    </div>

    <input type="submit" name="upload"  onsubmit="resetform()" value="UPLOAD">

    </div>
</form>
<script src="reset.js"></script>

</body>
</html> -->