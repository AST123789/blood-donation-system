<?php
 $help=$_POST['help'];
 $con=mysqli_connect('localhost','root');
 mysqli_select_db($con,'employee');
 $q=" insert into query (help) values ('$help') ";
 $num=mysqli_query($con,$q);
 if($num==1)
 {
	 echo "record insert";
 }
 else
 {
	 echo "record not insert";
 }
 ?>
