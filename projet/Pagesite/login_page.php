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
	<form method="post" action="login_page.php" >
	<p>
		<label for="login"> Login : </label>
		<input type="text" name="login" id="login" placeholder="ex: Sean.Bean@gmail.com"/> <br>
		<label for="password"> Password: </label>
		<input type="text" name="password" id="password" placeholder="ex: BROWN"/> <br>
		<input type="submit" name="log_in" value="LOG IN"/>
	</form>

	<br>
	<a href="main_page.html">Main page</a>

<?php 
echo '<br><br>test A <br>';
$validate=0;
$config = include('config.php');
$connection = new mysqli($config['host'],$config['username'],$config['password'],$config['database']);

if(mysqli_connect_errno())
{
	die('Could not connect'.mysqli_connect_errno());
	unset($connection);
}
else 
{
	echo 'Connected successfully'."<br>";
}

echo "$validate <br>";

if(isset($_POST["login"]))
{
	$userLogin=$_POST["login"];
} 
else echo "error login<br>";
if(isset($_POST["password"]))
{
	$userPassword=$_POST["password"];
} 
else echo "error password<br>";

$request='SELECT password FROM patient WHERE mail=? AND password=?';
$req_pre = mysqli_prepare($connection, $request);

mysqli_stmt_bind_param($req_pre, "ss",$userLogin,$userPassword);
mysqli_stmt_execute($req_pre);
mysqli_stmt_bind_result($req_pre,$mdp);
echo "test B<br>";
echo"User = $userLogin <br>Password = $userPassword<br><br>";
echo"$mdp";

while(mysqli_stmt_fetch($req_pre))
	{		
		if(isset($mdp))
		{
			echo"login et mdp ok<br>";
			$validate=1;
			header('Location: http://localhost/PLAMP/projet/Pagesite/main_page.html');
		}		
	}

echo"<br>Validate = $validate";	


?>

</body>
</html>