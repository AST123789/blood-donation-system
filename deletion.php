<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logo');
	$q="select * from user ";
    $result=mysqli_query($con,$q);
	$num=mysqli_num_rows($result);
	mysqli_close($con);
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
<form action="delete.php" method="post">
<table>
<tr>
<td> USER ID </td>
<td>First Name:</td>
<td>Last Name:</td>
<td> Mobile No.</td>
<td> Blood Group</td>
<td> Username</td>
<td> Aaddress </td>
<td> Email Id</td>
<td> give Blood</td>
<td>Take Blood</td>
<td> select to delete </td>
</tr>  
</div>
	<?php
   for($i=1;$i<=$num;$i++)
   {
	$row=mysqli_fetch_array($result);
	?>

 
 
	  <?php> echo "<tr>";?>
	  <?php echo '<td>' .$row['userid'].'</td>';?>
	  <?php echo '<td>' .$row['firstname'].'</td>'; ?>
	  <?php echo '<td>' .$row['lastname'].'</td>';  ?>
	  <?php echo '<td>' .$row['mobile'].'</td>';  ?>
	  <?php echo '<td>'.$row['bgroup'].'</td>';  ?>
	  <?php echo '<td>'.$row['username'].'</td>';?>
	  <?php echo '<td>'.$row['address'].'</td>'; ?>
	  <?php echo '<td>'.$row['emailn'].'</td>';  ?>
	  <?php echo '<td>'.$row['giveblood'].'</td>';?>
	  <?php echo '<td>'.$row['takeblood'].'<td>';?>
	  <td> <input type="checkbox" value="<?php echo $row['username']; ?>" name="b <?php echo $i; ?>"/></td>
	  <?php echo "</tr>";?>
	  <?php
	}  

?>
<tr>
<td><input type="submit" value="delete"/></td>
</tr>
</table>
</form>
<a href="emplogout.php">logout</a>
</body>
</html>