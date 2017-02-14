<?php
	session_start();
	if(!isset($_SESSION['s_id'])){
		header("location:index.php");
	}

	$c_id  = $_SESSION['s_id'];
	$c_nom = $_SESSION['s_nom'];
	$c_tra = $_SESSION['s_tra'];
	$c_pai = $_SESSION['s_pai'];
	
	$a_pai  = explode("|", $c_pai);
	$pabrev = $a_pai[0];
	$pnombr = $a_pai[1];
?>