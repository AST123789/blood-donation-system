
<?php
session_start();
if(!isset($_SESSION['username'])&&($_SESSION['password']))
{
	header('location:http://localhost/blood/login.php');
}
?>
<!doctype html>
<html>
<head>
<style>
*
{
padding:0px;
margin:0px;
}
body
{
	background-image:url("bk.jpg");
	background-repeat:no-repeat;
}
.hd
{
width:100%;
height:75px;
position:fixed;
z-index:999;
background-image:url("blood6.jpg");
}
.headbar
{
width:50%;
height:75px;
float:left;
}
.headbar h1
{
line-height:75px;
text-align:center;
text-decoration:underline;
color:#E0FFFF;
}
.head1
{
height:75px;
}
.head1 ul
{
margin-top:50px;
margin-left:90px;
list-style:none;
display:inline-block;
}
.head1 ul li
{
float:left;
width:90px;
font-size:20px;
margin-left:20px;
font-weight:bold;
}
.head1 ul li a
{
text-decoration:none;
color:white;
display:block;
}
.head1 ul li a:hover
{
color:#151B54;
}
.s
{
width:25%;
float:left;
height:75px;
}
.im
{
height:500px;
width:100%;	
margin-top:75px;
position:absolute;
}

table,th,td
{
	border:0px;
	cell-padding:0px;
}	
table 
{	width:500px;
	height:40px;
}
.a
{
	width:700px;
	height:150px;
	margin-left:140px;
	margin-top:30px;
}
.s1
{
margin-top:150px;
width:400px;
height:400px;	
margin-left:550px;
font-size:20px;
border:2px solid black;
}
</style>
</head>
<body>
<div class="hd">
<div class="s">
<img src="logo6.png"/>
</div>
<div class="headbar">
<h1>BLOOD DONATION CAMP </h1>
</div>
<div class="head1">
<ul>
<li><a href="logout.php">logout</a></li>
<li><a href="search.php">search</a></li>
</ul>
</div>
</div>
<div class="im">
<h2> hello, <?php echo $_SESSION['username'];  ?> </h2>
<div class="s1">
<form>
<table>
<?php 
     
      $con=mysqli_connect('localhost','root');
	 	 mysqli_select_db($con,'logo');
	  
	  $q="select * from user where username='".$_SESSION['username']."'";
	 
	  $result=mysqli_query($con,$q);

	while($row=mysqli_fetch_array($result))
	{
		?>
      <tr><div class="a"> <?php echo "<img src='".$row['image']."' height='100' width='100' align='justify'/>"?></tr></div>
      <tr><th>First Name <td> <?php echo $row['firstname']; ?> </td></th></tr>
	  <tr><th>Last Name</th><td> <?php echo $row['lastname']; ?> </td></tr>
	  <tr><th>Mobile No.<td> <?php echo $row['mobile']; ?> </td></th></tr>
	  <tr><th>Blood Group<td> <?php echo $row['bgroup']; ?> </td></th></tr>
	  <tr><th>Email<td> <?php echo $row['emailn']; ?> </td></th></tr>
	 <tr><th>Address<td> <?php echo $row['address']; ?> </td></th></tr>
	 <tr><th>Give Blood<td><?php echo $row['giveblood'];?></td></th></tr>
	 <tr><th>Take Blood<td><?php echo $row['takeblood'];?></td></th></tr>
	 <?php
 
      
	}	   
	   
  ?>
                     
</table>
</form>
</div>
</div>
</body>
</html>
