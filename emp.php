<?php
session_start();
$username=$_POST['username'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'employee');
$q="select * from userid where username='$username' && password='$password'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	
	header('location:http://localhost/blood/profile.php');
}
else
{
	header('location:http://localhost/blood/emplogni.php');
}

?>