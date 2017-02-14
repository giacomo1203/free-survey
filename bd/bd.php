<?php
	class BD{
		var $cn;
		function BD($servidor="localhost", $usuario="survey_ipfcom", $clave="Alinfinito1", $base="survey_ipfcom"){
			$this->cn = mysql_connect($servidor, $usuario, $clave);
			mysql_select_db($base, $this->cn);
			mysql_query("set names 'utf8'");
			date_default_timezone_set("America/Lima");
		}
		
		function proceso($sql){
			mysql_query($sql, $this->cn);
			return mysql_insert_id();
		}
		
		function consulta($sql){
			return mysql_query($sql, $this->cn);
		}
		
		function num_rows($resultado){
			return mysql_num_rows($resultado);
		}
		
		function fetch_array($resultado){
			return mysql_fetch_array($resultado);
		}
		
		function fetch_assoc($resultado){
			return mysql_fetch_assoc($resultado);
		}
		
		function fetch_row($resultado){
			return mysql_fetch_row($resultado);
		}
		
		function result($resultado, $item){
			return mysql_result($resultado, 0, $item);
		}
		
		function num_fields($resultado){
			return mysql_num_fields($resultado);
		}
	}
?>