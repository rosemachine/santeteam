<!DOCTYPE html>
<html>
<head>
	<metacharset= "utf-8"/> 
	<metaname="keywords" content="test, page, web"/>
	<linktype="text/css" rel="path/style.css" />
	<title> DP Link </title>
	<script> <!--JS Scripts --> </script>
	<link rel="stylesheet" type="text/css" href="login_page.css"/>
</head>
<body>
	<h1> Login Page </h1>
	<form action="/action_page.html" method="get">
	<p>
		<label for="login"> Login : </label>
		<input type="text" name="login" id="password" placeholder="ex: Sean.Bean@gmail.com"/> <br>
		<label for="password"> Password: </label>
		<input type="text" name="password" id="password" placeholder="ex: BROWN"/> <br>
	</form>
	<input type="submit" name="log_in" value="LOG IN"/>
	<br>
	<a href="main_page.html">Main page</a>
</body>

<?php 
	echo 'test';
	$validate=0;
	if(isset($_POST["login"])) $userLogin=$_POST["login"];
	if(isset($_POST["password"])) $userPassword=$_POST["password"];

	$request='SELECT login FROM connection WHERE mail=? AND password=?';
	$req_pre = mysqli_prepare($connection, $request);

	mysqli_stmt_bind_param($req_pre, "ss",$user_login,$user_password);
	mysqli_stmt_execute($req_pre);
	mysqli_stmt_bind_result($req_pre,$login);
	echo "test";

?>

</html>


