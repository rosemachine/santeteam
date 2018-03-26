<?php

class Users //creation of the class User
{
	public $bdd_users=array("mp1","l1","mp2","l2","mp3","l3");

	function getList()	{
		return $this->bdd_users;
	}
}
?>