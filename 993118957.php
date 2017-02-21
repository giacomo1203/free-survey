<?php
	include("bd/bd.php");
	$o_bd = new BD();
	
	$res = $o_bd->consulta("select id, fname, lname from usuario where estado='1' order by fname, lname");
	$num = $o_bd->num_rows($res);
?>
<html>
<head>
<style type="text/css">
table.gridtable {
	font-family: verdana,arial,sans-serif;
	font-size:11px;
	color:#333333;
	border-width: 1px;
	border-color: #666666;
	border-collapse: collapse;
}
table.gridtable th {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #dedede;
}
table.gridtable td {
	border-width: 1px;
	padding: 8px;
	border-style: solid;
	border-color: #666666;
	background-color: #ffffff;
}
</style>
</head>
<body>
<table border="0" cellpadding="0" cellspacing="0" class="gridtable">
<tr>
	<th>Usuario</th>
	<th>1a</th>
	<th>1b</th>
	<th>1c</th>
	<th>2a</th>
	<th>2b</th>
	<th>2c</th>
	<th>3</th>
	<th>3a</th>
	<th>4</th>
	<th>5</th>
	<th>6</th>
	<th>6a</th>
	<th>6b</th>
	<th>7</th>
	<th>7a</th>
	<th>8</th>
	<th>8a</th>
	<th>9</th>
	<th>10</th>
	<th>11</th>
	<th>11a</th>
	<th>11b</th>
	<th>12</th>
	<th>12a</th>
	<th>12b</th>
	<th>13</th>
	<th>13a</th>
	<th>13b</th>
	<th>14</th>
	<th>14a</th>
	<th>15a</th>
	<th>15b</th>
	<th>15c</th>
	<th>15d</th>
	<th>15e</th>
	<th>15f</th>
	<th>15g</th>
	<th>15h</th>
	<th>15i</th>
	<th>15j</th>
	<th>16a</th>
	<th>16b</th>
	<th>16c</th>
	<th>16d</th>
	<th>16e</th>
	<th>16f</th>
	<th>17</th>
	<th>18</th>
	<th>18a</th>
	<th>18b</th>
	<th>18c</th>
	<th>18d</th>
	<th>18e</th>
	<th>18f</th>
	<th>18g</th>
	<th>18h</th>
</tr>
<?php
	if($num>0){
		while($f=$o_bd->fetch_assoc($res)){
			$pre = 0;
			$res_r = $o_bd->consulta("select valor from respuesta where usu_id='".$f["id"]."' order by pre_id");
			$num_r = $o_bd->num_rows($res_r);
?>
			<tr>
				<td><?php echo $f["fname"]." ".$f["lname"]; ?></td>
				<?php
					if($num_r>0){
						while($fr=$o_bd->fetch_assoc($res_r)){
							$pre++;
							if($pre==1 || $pre==2 || $pre==7){
								$a_r = explode("|", $fr["valor"]);
								echo "<td>".$a_r[0]."</td>";
								echo "<td>".$a_r[1]."</td>";
								echo "<td>".$a_r[2]."</td>";
							}
							if($pre==3 || $pre==4 || $pre==5 || $pre==9 || $pre==10 || $pre==11 || $pre==19 || $pre==20){
								echo "<td>".str_replace("undefined", "", $fr["valor"])."</td>";
							}
							if($pre==6){
								$v = $fr["valor"];
								if($v==1){ echo "<td>Private sector representatives should set the agenda, and should determine the outcomes of ANCTF sessions</td>"; }
								if($v==2){ echo "<td>Private sector representatives should have an equal status with government representatives in setting the agenda and determining the outcomes of ANCTF sessions</td>"; }
								if($v==3){ echo "<td>Private sector representatives should have an advisory role only; the government representatives should set the agenda and determine the outcomes of ANCTF sessions</td>"; }
							}
							if($pre==8){
								$a_r = explode("|", $fr["valor"]);
								echo "<td>".$a_r[0]."</td>";
								echo "<td>".$a_r[1]."</td>";
							}
							if($pre==12){
								$v = $fr["valor"];
								if($v==1){ echo "<td>Limit to Art. 23.2</td>"; }
								if($v==2){ echo "<td>Extend to wider trade facilitation agenda</td>"; }
							}
							if($pre==13){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Government</td>"; }
								if($a_r[0]==2){ echo "<td>Private sector</td>"; }
								if($a_r[0]==3){ echo "<td>Combination of government and private sector</td>"; }
								echo "<td>".$a_r[1]."</td>";
								echo "<td>".$a_r[2]."</td>";
							}
							if($pre==14){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Government</td>"; }
								if($a_r[0]==2){ echo "<td>Private sector</td>"; }
								if($a_r[0]==3){ echo "<td>Establish/fund dedicated secretariat</td>"; }
								echo "<td>".$a_r[1]."</td>";
								echo "<td>".$a_r[2]."</td>";
							}
							if($pre==15){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Government office</td>"; }
								if($a_r[0]==2){ echo "<td>Private sector premises</td>"; }
								if($a_r[0]==3){ echo "<td>Neutral venue (e.g. hotel, university)</td>"; }
								echo "<td>".$a_r[1]."</td>";
								echo "<td>".$a_r[2]."</td>";
							}
							if($pre==16){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Once per year</td>"; }
								if($a_r[0]==2){ echo "<td>Every six months</td>"; }
								if($a_r[0]==3){ echo "<td>Every quarter</td>"; }
								if($a_r[0]==4){ echo "<td>Every month</td>"; }
								if($a_r[0]==5){ echo "<td>Other</td>"; }
								echo "<td>".$a_r[1]."</td>";
							}
							if($pre==17){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Office of Transport Security</td>"; }else{ echo "<td></td>"; }
								if($a_r[1]==1){ echo "<td>Department of Environment</td>"; }else{ echo "<td></td>"; }
								if($a_r[2]==1){ echo "<td>Department of Finance</td>"; }else{ echo "<td></td>"; }
								if($a_r[3]==1){ echo "<td>Department of Health</td>"; }else{ echo "<td></td>"; }
								if($a_r[4]==1){ echo "<td>Digital Transformation Office</td>"; }else{ echo "<td></td>"; }
								if($a_r[5]==1){ echo "<td>Infrastructure Australia</td>"; }else{ echo "<td></td>"; }
								if($a_r[6]==1){ echo "<td>State Government agencies</td>"; }else{ echo "<td></td>"; }
								if($a_r[8]==1){ echo "<td>Other</td>"; }else{ echo "<td></td>"; }
								echo "<td>".$a_r[7]."</td>";
								echo "<td>".$a_r[9]."</td>";
							}
							if($pre==18){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Representatives of the insurance industry</td>"; }else{ echo "<td></td>"; }
								if($a_r[1]==1){ echo "<td>Representatives of the finance industry</td>"; }else{ echo "<td></td>"; }
								if($a_r[2]==1){ echo "<td>Port/airport operators</td>"; }else{ echo "<td></td>"; }
								if($a_r[3]==1){ echo "<td>Private laboratories/certification agencies</td>"; }else{ echo "<td></td>"; }
								if($a_r[4]==1){ echo "<td>Other</td>"; }else{ echo "<td></td>"; }
								echo "<td>".$a_r[5]."</td>";
							}
							if($pre==21){
								$a_r = explode("|", $fr["valor"]);
								if($a_r[0]==1){ echo "<td>Permanent consultative committees</td>"; }else{ echo "<td></td>"; }
								if($a_r[1]==1){ echo "<td>Centres of excellence or expertise</td>"; }else{ echo "<td></td>"; }
								if($a_r[2]==1){ echo "<td>Network of subject-matter experts</td>"; }else{ echo "<td></td>"; }
								if($a_r[3]==1){ echo "<td>Peer-to-peer groups</td>"; }else{ echo "<td></td>"; }
								if($a_r[4]==1){ echo "<td>Implementation working parties</td>"; }else{ echo "<td></td>"; }
								if($a_r[5]==1){ echo "<td>Conferences</td>"; }else{ echo "<td></td>"; }
								if($a_r[6]==1){ echo "<td>Other</td>"; }else{ echo "<td></td>"; }
								echo "<td>".$a_r[7]."</td>";
							}
						}
					}
				?>
			</tr>
<?php
		}
	}
?>
</table>
</body>
</html>