<html>
<head>
<style>
body
{
	background-color:lightblue;
}
h2
{
	font-size:30px;
	text-decoration:underline;
}
</style>
</head>
<body>
<form action="" method="post">
<table>
<h2> Query </h2>
<?php
 
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'employee');
 $q=" select * from query";
 $result=mysqli_query($con,$q);
 $num=mysqli_num_rows($result);
 while($row=mysqli_fetch_array($result))

  {
	  ?>
	  <tr><td><?php echo $row['help'];?></td></tr>

<?php }
 
 ?>
 </table>
 </form>
</body>
</html>

