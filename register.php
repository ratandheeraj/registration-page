<?php

session_start();

$conn = mysqli_connect("localhost","root","","schemax") or die("Could not connect");

$name = $_POST['username'];
$password1 = $_POST['password'];
$password = md5($password1);
$class = $_POST['class'];
$rollno = $_POST['rollno'];
$gender = $_POST['gender'];
$department = $_POST['department'];

$query = "INSERT INTO login(name,class,rollno,gender,department,password) VALUES('$name','$class','$rollno','$gender','$department','$password')";
mysqli_query($conn,$query);
header("location:homepage.html");



?>