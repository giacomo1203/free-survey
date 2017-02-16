<?php

	ini_set('memory_limit', 512000000);

	include("../sesion.php");
	include("../bd/bd.php");
	include("../inc/funcion.php");
	$o_bd = new BD();
	
	$modo = $_REQUEST['modo'];

	if($modo=="add" || $modo=="upd"){
		$usu    = $c_id;
		$art    = $_REQUEST['art'];
		$blo    = $_REQUEST['blo'];
		$pre    = $_REQUEST['pre'];
		$subpre = $_REQUEST['subpre'];
		$valor  = $_REQUEST['valor']; $valor = str_replace("undefined", "", $valor);
		$fec    = date("Ymd");
		$est    = "1";
		if($modo=="add"){
			$o_bd->proceso("delete from respuesta where usu_id=$usu and art_id=$art and blo_id=$blo and pre_id=$pre and subpre_id='$subpre'");
			$id = $o_bd->proceso("insert into respuesta(usu_id, art_id, blo_id, pre_id, subpre_id, valor, fecha, estado) values($usu, $art, $blo, $pre, '$subpre', '$valor', $fec, '$est')");
			echo "Registro grabado correctamente.";
		}elseif($modo=="upd"){
			$id = $_REQUEST['id'];
			$o_bd->proceso("update respuesta set usu_id=$usu, art_id=$art, blo_id=$blo, pre_id=$pre, subpre_id='$subpre', valor='$valor', estado='$est' where id=$id");
			echo "Registro actualizado correctamente.";
		}
	}elseif($modo=="del"){
		$id = $_REQUEST['id'];
		$o_bd->proceso("delete from respuesta where id=$id");
		echo "Registro eliminado correctamente.";
	}elseif($modo=="ter"){
		$o_bd->proceso("update usuario set est_enc='0' where id=$c_id");
	}
	
?>