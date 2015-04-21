<?php
	session_start();

	function logOut()
	{
		$_SESSION['Username'] = null;
		header('Location: agent_login.php');
	}

	if(isset($_SESSION['Username']) && !empty($_SESSION['Username']))
	{
		logOut();
	}

?>