<?php 

$config = include('config.php');

$connection = new mysqli($config['host'],$config['username'],$config['password'],$config['database']);


if(isset($_POST["user"]))     $userType=$_POST["user"];
if(isset($_POST["firstname"])) $userFname=$_POST["firstname"];
if(isset($_POST["lastname"])) $userLname=$_POST["lastname"];
if(isset($_POST["birth"]))    $userAge=2018-$_POST["birth"];
if(isset($_POST["email"]))    $userMail=$_POST["email"];
if(isset($_POST["address"]))  $userAddress=$_POST["address"];
if(isset($_POST["password"])) $userPassword=$_POST["password"];

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
  $req_pre = mysqli_prepare($connection, 'INSERT INTO  patient(fname,lname,age,mail,password,address) VALUES (?,?,?,?,?,?)');
  mysqli_stmt_bind_param($req_pre,"ssisss",$userFname,$userLname,$userAge,$userMail,$userPassword,$userAddress);
  mysqli_stmt_execute($req_pre);
  header('Location: http://localhost/santeteam/projet/Pagesite/user.php');
}

?>