<?php

include 'class.php';
$user = new Users; //instancing a new object
$bdd_users=$user->getList(); //calling the constructor getUser

  session_start();

if(empty($_POST['login']) || empty($_POST['password'])) {
    echo "You did not fill out the required fields.";
}

if(isset($_POST['login']) && isset($_POST['password']))
{
	//BASE DE DONNEE       
    $login = $_POST['login'];
	$password = $_POST['password'];
	$default_pass1 = "m1";
	$default_log1 = "l1";
	$default_pass2 = "m2";
	$default_log2 = "l2";
	$default_pass3 = "m3";
	$default_log3 = "l3";
	$bdd_users = array( $default_pass1, $default_log1, $default_pass2, $default_log2, $default_pass3, $default_log3);
	$connected = false;

    if (!isset($_SESSION["attempts"])) {
        $_SESSION["attempts"] = 0; }

    for ($i = 0; $i < count($bdd_users); $i=$i+2) {
	    if (($password == $bdd_users[$i]) && ($login == $bdd_users[$i+1]) && $_SESSION["attempts"] < 3) {
	        $connected = true;} }

    if ($connected && $_SESSION["attempts"]<3) {
  		header('Location: http://localhost/projet/user.php');
   		$_SESSION["attempts"] = 0;}
	else {
		if($_SESSION["attempts"]>=3) {
			 $_SESSION["attempts"] = 0;
			 header("Refresh: 2;URL=http://localhost/projet/multiplefailsession.php"); 	}
		else {
			$_SESSION["attempts"] = $_SESSION["attempts"] + 1;
			header('Location: http://localhost/projet/failsession.php'); }
	}       
}
?>
