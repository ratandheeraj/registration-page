<?php

session_start();

$conn = mysqli_connect("localhost","root","","ratan");

$name = $_POST['username'];
$password1 = $_POST['password'];
$password = md5($password1);

$query = "SELECT * FROM blue WHERE name = '$name' AND password = '$password'";
$result = mysqli_query($conn,$query);
$temp = mysqli_fetch_array($result);
if($temp[0]==$name && $temp[1]==$password){
    header("location:homepage.html");

}
else{
    echo "Username or password incorrect";
}



?>