<!doctype html>
<html>
<head>
<style>
body
{
	background-color:lightblue;
}
table tr td
{
	font-size:20px;
}
h1
{
	color:blue;
	text-decoration:underline;
}
table
{
	margin:70px;
	border:2px solid black;
}
</style>
</head>
<body>
<form action="emp.php" method="post">
<h1> LOGIN</h1>
<table>
<tr>
<td>username</td>
<td ><input type="text" name="username"/></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password"/></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="search" value="submit"/></td>
</tr>
</table>
</form>
</body>
</html>