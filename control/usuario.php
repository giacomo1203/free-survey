<?php
	session_start();
	include("../bd/bd.php");
	include("../inc/funcion.php");
	$o_bd = new BD();
	
	$modo = $_REQUEST['modo'];

	if($modo=="add" || $modo=="upd"){
		$usu    = $_REQUEST['usu'];
		$pas    = $_REQUEST['pas'];
		$fnam   = $_REQUEST['fnam'];
		$lnam   = $_REQUEST['lnam'];
		$org    = $_REQUEST['org'];
		$job    = $_REQUEST['job'];
		$ema    = $_REQUEST['ema'];
		$cou    = $_REQUEST['cou'];
		$tel    = $_REQUEST['tel'];
		$typorg = $_REQUEST['typorg'];
		$typsiz = $_REQUEST['typsiz'];
		$fec    = date("Ymd");
		$est    = "1";
		if($modo=="add"){
			$res = $o_bd->consulta("select id from usuario where usu='$usu' and estado='1'");
			$num = $o_bd->num_rows($res);
			if($num>0){
				echo "2";
			}else{
				$id = $o_bd->proceso("insert into usuario(usu, pas, fname, lname, organization, job, email, country, telephone, typeorg, typesiz, fecha, estado) values('$usu', '$pas', '$fnam', '$lnam', '$org', '$job', '$ema', '$cou', '$tel', '$typorg', '$typsiz', $fec, '$est')");
				$_SESSION['s_id']  = $id;
				$_SESSION['s_nom'] = $fnam." ".$lnam;
				$_SESSION['s_tra'] = $job;
				$_SESSION['s_pai'] = $cou;
				//echo "Registro grabado correctamente.";
				echo "1";
			}
		}elseif($modo=="upd"){
			$id = $_REQUEST['id'];
			//$o_bd->proceso("update usuario set usu='$usu', pas='$pas', fname='$fnam', lname='$lnam', organization='$org', job='$job', email='$ema', country='$cou', telephone='$tel', typeorg='$typorg', typesiz='$typsiz', estado='$est' where id=$id");
			$o_bd->proceso("update usuario set fname='$fnam', lname='$lnam', organization='$org', job='$job', email='$ema', country='$cou', telephone='$tel', typeorg='$typorg', typesiz='$typsiz', estado='$est' where id=$id");
			//echo "Registro actualizado correctamente.";
			echo "1";
		}
	}elseif($modo=="del"){
		$id = $_REQUEST['id'];
		$o_bd->proceso("delete from usuario where id=$id");
		echo "Registro eliminado correctamente.";
	}elseif($modo=="ver"){
		$email = $_REQUEST['email'];
		$res = $o_bd->consulta("select id, fname, lname, job, country from usuario where email='$email' and estado='1'");
		$num = $o_bd->num_rows($res);
		if($num>0){
			$res_art = $o_bd->consulta("select art_id from respuesta where usu_id=".$o_bd->result($res, "id")." order by art_id desc limit 1");
			$num_art = $o_bd->num_rows($res_art);
			$art = "1";
			if($num_art>0){
				$art = $o_bd->result($res_art, "art_id");
			}
			echo $art;
		}else{
			echo "0";
		}
	}elseif($modo=="login"){
		$usu = $_REQUEST['usu'];
		$pas = $_REQUEST['pas'];
		$res = $o_bd->consulta("select id, fname, lname, job, country from usuario where usu='$usu' and pas='$pas' and estado='1'");
		$num = $o_bd->num_rows($res);
		if($num>0){
			$_SESSION['s_id']  = $o_bd->result($res, "id");
			$_SESSION['s_nom'] = $o_bd->result($res, "fname")." ".$o_bd->result($res, "lname");
			$_SESSION['s_tra'] = $o_bd->result($res, "job");
			$_SESSION['s_pai'] = $o_bd->result($res, "country");
			//$res_art = $o_bd->consulta("select art_id from respuesta where usu_id=".$o_bd->result($res, "id")." order by art_id desc limit 1");
			//$num_art = $o_bd->num_rows($res_art);
			//$art = "1";
			//if($num_art>0){
				//$art = $o_bd->result($res_art, "art_id");
			//}
			//echo $art;
			echo "1";
		}else{
			echo "0";
		}
	}
?>