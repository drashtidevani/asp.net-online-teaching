<?php

if(isset($_POST['name'])){
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = " ";
 $db = "us_trip";
 $con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $con;
 }
 

$name= $_POST ['name'];
$age =$_POST ['age'];
$gender= $_POST ['gender'];
$email =$_POST ['email'];
$phone =$_POST ['phone'];
$other =$_POST ['other'];
$date =$_POST['date']
  
 $sql = "INSERT INTO `trip` (Name, age, gender,email, phone, other, dt) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other','$date')";
 echo  $sql;
 
 if(con->($sql)==true){
    echo"successfully inserted";
}else{
    echo"ERROR:$sql <br> $conn->error";

    function CloseCon($conn)
    {
    $conn -> close();
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>travel form </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400&display=swap" rel="stylesheet">
</head>

<body>
    <img class=" bg" src="bg.webp" alt="bgimg">
    <div class="container">
        <h1>welcome to us trip form </h1>
        <p> pls submit your details and submit this form </p><br>
        <p class="submsg">Thanks for submitting this form !! we are happeier to you joining :) </p>
        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="phone" name="phone" id="phone" placeholder="enter your mobile number">
            <input type="email" name="email" id="email" placeholder="enter your email id">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>

</html>