<?php
/**
 * 
 */
class Logout
{
	
	public function __construct()
	{
		session_start();
	}

	public function logout()
	{
		unset($_SESSION['login']);
		unset($_SESSION['senha']);
		unset($_SESSION['nome']);
		session_destroy();
		header('location:../index.php');
	}
}

$logout = new Logout();
$logout->logout();