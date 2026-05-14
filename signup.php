<?php

$con=mysqli_connect("localhost","root","","signup");

$fname =$_POST["fname"];
$password =$_POST["password"];
$email =$_POST["email"];
$city =$_POST["city"];
$phone =$_POST["phone"];
$birthday =$_POST["birthday"];
$gender =$_POST["gender"];
$checkbox=$_POST["checkbox"];


$sql = mysqli_query($con,"SELECT FROM signup(fname,password,email,city,phone,birthday,gender,checkbox) VALUES ('".$fname."','".$password."','".$email."','".$city."','".$phone."','".$birthday."','".$gender."','".$checkbox."')");
	
	mysqli_query=fetch("array")

header("location:signup.html");

?>