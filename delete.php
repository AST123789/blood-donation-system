<?php
 $size=sizeof($_POST);
 $j=1;
 for($i=1;$i<=$size;$i++,$j++)
 {
	 $index="b".$j;
	 if(isset($_POST[$index]))
		 $u_name[$i]=$_POST[$index];
	 
 }
 $con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logo');

for($k=1;$k<=$size;$k++)
{
	$q="delete from user where username=".$u_name[$k];
	mysqli_query($con,$q);
}
mysqli_close($con);
?>
<html>
<head>
<title>delete </title>
</head>
<body>
<?php echo $size."delete account";
?>
</body>
</html>