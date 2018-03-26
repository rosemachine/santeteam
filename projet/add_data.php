<p>
<form method="post" action="add_data.php">
	<label for="idp"> ID patient :<input type="text" name ="idp" id="idp"/></label><br>
	<label for="weight"> Weight :<input type="text" name ="weight" id="weight"/></label><br>
	<label for="blood"> Blood :<input type="text" name ="blood" id="blood"/></label><br>
	<label for="sugar"> Sugar :<input type="text" name ="sugar" id="sugar"/></label><br>
	<label for="temperature"> Temperature :<input type="text" name ="temperature" id="temperature"/></label><br>
	<input type="submit" name="send" value="SEND"/>	
</form>
</p>

<?php

$config = include('config.php');

$connection = new mysqli($config['host'],$config['username'],$config['password'],$config['database']);


if(isset($_POST["idp"])) $userIdp=$_POST["idp"];
if(isset($_POST["weight"])) $userWeight=$_POST["weight"];
if(isset($_POST["blood"]))$userBlood=$_POST["blood"];
if(isset($_POST["sugar"]))$userSugar=$_POST["sugar"];
if(isset($_POST["temperature"]))$userTemperature=$_POST["temperature"];


if(mysqli_connect_errno())
{
	die('Could not connect'.mysqli_connect_errno());
	unset($connection);
}
else 
{
	echo 'Connected successfully'."<br>";
}


if(isset($connection))
{
	$req_pre = mysqli_prepare($connection, 'INSERT INTO  data(idp, weight,bloodanalysis,sugar,temperature) VALUES (?,?,?,?,?)');
	mysqli_stmt_bind_param($req_pre,"issss",$userIdp,$userWeight,$userBlood,$userSugar,$userTemperature);
	mysqli_stmt_execute($req_pre);
}

 ?>