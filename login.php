<!doctype html>
<html>
<head>
<style>
body
{
	background-image:url("loginphoto.jpg");
}
table tr td
{
	font-size:20px;
}
h1
{   
   margin-left:550px;
   margin-top:200px;
   font-size:40px;
	color:blue;
	text-decoration:underline;
}
table
{
	margin:70px;
	margin-left:600px;
	margin-top:40px;
	border:2px solid black;
}

table tr td
{
	color:white;
	
	
}
</style>
</head>
<body>
<form action="validation.php" method="post">
<h1> LOGIN</h1>
<table>
<tr>
<td>Username<br><br></td>
<td ><input type="text" name="username"/><br><br></td>
</tr>
<tr>
<td>Password<br><br></td>
<td><input type="password" name="password"/><br><br></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="search" value="submit"/></td>
</tr>
</table>
</form>
</body>
</html>