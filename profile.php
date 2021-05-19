<?php
session_start();
if(!isset($_SESSION['username']))
{
	header('location:http://localhost/blood/emplogni.php');
}
?>

<html>
<head>
<title> user profile </title>
<style>
body
{
	background-image: url("blood9.jpg");
	text-align:center;
}
h1
{
	color:green;
	text-decoration:underline;
	font-style:"georgia";
	font-size:50px;
	text-shadow:2px 4px 5px;
	font-weight:bold;
}
table,th,td
{
	border:2px solid black;
	sell-padding:0px
	text-align:center;
	font-weight:bold;
}	
table 
{	width:1000px;
	height:40px;
	margin-left:250px;
	text-align:center;
}
a
{
	color:red;
	font-size:20px;
	font-weight:bold;
}
</style>
</head>
<body>
<h1>profile</h1>
<form action="" method="post">
<table>
<tr>
<td>Image:</td>
<td>First Name:</td>
<td>Last Name:</td>
<td> Mobile No.</td>
<td> Blood Group</td>
<td> Username</td>
<td> Aaddress </td>
<td> Email Id</td>
<td> give Blood</td>
<td>Take Blood</td>

</tr>  
</div>
<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logo');
	$q="select * from user ";
    $result=mysqli_query($con,$q);

	while($row=mysqli_fetch_array($result))
	{

 
 
	   echo "<tr>";
	   echo "<td><img src='".$row['image']."' height='100' width='100'/> </td>";
	   echo '<td>' .$row['firstname'].'</td>'; 
	    echo '<td>' .$row['lastname'].'</td>';  
	   echo '<td>' .$row['mobile'].'</td>';  
	   echo '<td>'.$row['bgroup'].'</td>';  
	   echo '<td>'.$row['username'].'</td>';
	   echo '<td>'.$row['address'].'</td>'; 
	   echo '<td>'.$row['emailn'].'</td>';  
	   echo '<td>'.$row['giveblood'].'</td>';
	    echo '<td>'.$row['takeblood'].'<td>';
		
	  
	}  

?>


</table>
</form>
<a href="emplogout.php">logout</a>&nbsp &nbsp &nbsp
<a href="empquery.php">query</a>
</body>
</html>