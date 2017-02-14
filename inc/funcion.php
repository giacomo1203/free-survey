<?php
	function formato_fecha($fecha, $formato){ //formato => 1=numero, 2=texto
		if($formato=="1"){
			if($fecha=="0"){
				$fecha = "";
			}else{
				$fecha = substr($fecha, 6, 2)."/".substr($fecha, 4, 2)."/".substr($fecha, 0, 4);
			}
		}elseif($formato=="2"){
			if($fecha==""){
				$fecha = "0";
			}else{
				$fecha = substr($fecha, 6, 4).substr($fecha, 3, 2).substr($fecha, 0, 2);
			}
		}elseif($formato=="3"){
			if($fecha=="0000-00-00"){
				$fecha = "";
			}else{
				$fecha = substr($fecha, 8, 2)."/".substr($fecha, 5, 2)."/".substr($fecha, 0, 4);
			}
		}
		return $fecha;
	}

	function encriptar($string, $key){
		$result = '';
		for($i=0; $i<strlen($string); $i++){
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)+ord($keychar));
			$result.=$char;
		}
		return base64_encode($result);
	}

	function desencriptar($string, $key){
		$result = '';
    	$string = base64_decode($string);
    	for($i=0; $i<strlen($string); $i++){
        	$char = substr($string, $i, 1);
        	$keychar = substr($key, ($i % strlen($key))-1, 1);
        	$char = chr(ord($char)-ord($keychar));
        	$result.=$char;
		}
		return $result;
	}

	function encri($q){
	    $cryptKey = 'APEC-SHARE';
	    $qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $q, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
	    return($qEncoded);
	}

	function decri($q){
	    $cryptKey = 'APEC-SHARE';
	    $qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($q), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
	    return($qDecoded);
	}

	$a_meses = array("","Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Setiembre","Octubre","Noviembre","Diciembre");
	$a_mes   = array("","Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Set","Oct","Nov","Dic");
?>