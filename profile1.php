<?php
session_start();
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'logo');
if(isset($_GET['user']))
{
	$user=$_GET['user'];
	$get_user=mysqli_query("select * from user where username='$user'");
if(	$get_user_num_row==1)
{
	$profile_data=$get_user->fetch_assoc();
}

?>
<!doctype html>
<html>
<head>
</head>
<body>
<h3> personal information <?php $visitor=$_SESSION['username'];
  if($user==$visitor)
  {?> <a href="edit-profile.php?user=<?php echo $profile_data['username']?>">edit profile</a>
<?php
  }
  ?>
</h3>
<table>
<tr>

<td> firstname </td><td><?php echo $profile_data['firstname']?></td>
  <td> lastname </td><td><?php echo $profile_data['lastname']?></td>
   <td> email </td><td><?php echo $profile_data['emailn']?></td>
   </tr>
   </table>
   </body> 
   </html>
   