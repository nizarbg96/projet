<?php 

if (isset($_POST['signupbutton'])){



	


$usernm = $_POST['user'];
$email_connect = $_POST['email_connect'];
$password = $_POST['password'];
$sql1="INSERT INTO users (user,email,password) VALUES ('$usernm','$email_connect', '$password'); ";
$result1=mysqli_query($connect,$sql1);

}








?>