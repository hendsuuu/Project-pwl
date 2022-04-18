<?php
	session_start();
	unset($_SESSION['msg']);
	header("location:.../index.php");
?>
