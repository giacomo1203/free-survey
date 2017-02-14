<?php
	include("sesion.php");
	include("bd/bd.php");
	include("inc/funcion.php");
	$o_bd = new BD();
	$res = $o_bd->consulta("select id, fname, lname, organization, job, email, country, telephone, typeorg, typesiz from usuario where id=$c_id");
	$num = $o_bd->num_rows($res);
	
	$a_typorg = explode("|", $o_bd->result($res, "typeorg"));
	$a_cou = explode("|", $o_bd->result($res, "country"));
	
	$res_res = $o_bd->consulta("select id,subpre_id,valor from respuesta where usu_id=$c_id order by art_id, blo_id, pre_id, subpre_id");
	$num_res = $o_bd->num_rows($res_res);
	
	$p1 = ""; $p2 = ""; $p3 = ""; $p4 = ""; $p5 = ""; $p6 = ""; $p7 = ""; $p8 = ""; $p9 = ""; $p10= "";
	$p11 = ""; $p12 = ""; $p13 = ""; $p14 = ""; $p15 = ""; $p16 = ""; $p17 = ""; $p18 = ""; $p19 = ""; $p20 = "";
	$p21 = "";
	
	$i = 0;
	if($num_res>0){
		while($f=$o_bd->fetch_assoc($res_res)){
			$i++;
			if($i==1){ $p1=explode("|", $f["valor"]); }
			if($i==2){ $p2=explode("|", $f["valor"]); }
			if($i==3){ $p3=$f["valor"]; }
			if($i==4){ $p4=$f["valor"]; }
			if($i==5){ $p5=$f["valor"]; }
			if($i==6){ $p6=$f["valor"]; }
			if($i==7){ $p7=explode("|", $f["valor"]); }
			if($i==8){ $p8=explode("|", $f["valor"]); }
			if($i==9){ $p9=$f["valor"]; }
			if($i==10){ $p10=$f["valor"]; }
			if($i==11){ $p11=$f["valor"]; }
			if($i==12){ $p12=$f["valor"]; }
			if($i==13){ $p13=explode("|", $f["valor"]); }
			if($i==14){ $p14=explode("|", $f["valor"]); }
			if($i==15){ $p15=explode("|", $f["valor"]); }
			if($i==16){ $p16=explode("|", $f["valor"]); }
			if($i==17){ $p17=explode("|", $f["valor"]); }
			if($i==18){ $p18=explode("|", $f["valor"]); }
			if($i==19){ $p19=$f["valor"]; }
			if($i==20){ $p20=$f["valor"]; }
			if($i==21){ $p21=explode("|", $f["valor"]); }
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
<!-- Standard Meta -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<!-- Site Properities -->
<title>ANCTF SURVEY</title>
<link rel="stylesheet" type="text/css" href="semantic-ui/semantic.css">
<link rel="stylesheet" type="text/css" href="semantic-ui/components/checkbox.min.css">
<link rel="stylesheet" type="text/css" href="homepage.css">
<link rel="stylesheet" type="text/css" href="iconfonts/flaticon.css">
<script src="jquery.js"></script>
<script src="semantic-ui/semantic.js"></script>
<script src="semantic-ui/components/checkbox.min.js"></script>
<script>
$(function(){
	$('.ui.card').popup();
    $('.ui.dropdown').dropdown({ on: 'hover' });
	$('.checkbox').checkbox( $(this).data('method') );

   $('input[type=radio][name=q7]').change(function() {
        $('#__q1, #__q2').fadeOut(500);
        if(this.value==4){
          $('#__q1').transition('bounce');
        }
        if(this.value==5){
          $('#__q2').transition('bounce');
        }
    });
    $('input[type=radio][name=q8]').change(function() {
        $('#__q3').fadeOut(500);
        if(this.value=='yes'){
          $('#__q3').transition('bounce');
        }
    });
    $('input[type=radio][name=q13]').change(function() {
        $('#__q4, #__q5').fadeOut(500);
        if(this.value==1){
          $('#__q4').transition('bounce');
        }
        if(this.value==2){
          $('#__q5').transition('bounce');
        }
    });
    $('input[type=radio][name=q14]').change(function() {
        $('#__q6, #__q7').fadeOut(500);
        if(this.value==1){
          $('#__q6').transition('bounce');
        }
        if(this.value==2){
          $('#__q7').transition('bounce');
        }
    });
    $('input[type=radio][name=q15]').change(function() {
        $('#__q8, #__q9').fadeOut(500);
        if(this.value==1){
          $('#__q8').transition('bounce');
        }
        if(this.value==2){
          $('#__q9').transition('bounce');
        }
    });
    $('input[type=radio][name=q16]').change(function() {
        $('#__q10').fadeOut(500);
        if(this.value==5){
          $('#__q10').transition('bounce');
        }
    });
    $('input[type=radio][name=q17]').change(function() {
        $('#__q11, #__q12').fadeOut(500);
        if(this.value==7){
          $('#__q11').transition('bounce');
        }
        if(this.value==8){
          $('#__q12').transition('bounce');
        }
    });
    $('input[type=radio][name=q18]').change(function() {
        $('#__q13').fadeOut(500);
        if(this.value==5){
          $('#__q13').transition('bounce');
        }
    });
    $('input[type=radio][name=q20]').change(function() {
        $('#__q14').fadeOut(500);
        if(this.value=='yes'){
          $('#__q14').transition('bounce');
        }
    });
    $('input[type=radio][name=q21]').change(function() {
        $('#__q15').fadeOut(500);
        if(this.value==7){
          $('#__q15').transition('bounce');
        }
    });
    $('input[type=radio][name=q3]').change(function() {
        $('#__q16').fadeOut(500);
        if(this.value=='yes'){
          $('#__q16').transition('bounce');
        }
    });
    $('input[type=radio][name=q9]').change(function() {
        $('#__q17').fadeOut(500);
        if(this.value=='yes'){
          $('#__q17').transition('bounce');
        }
    });

    <?php if($p3=="yes"){ echo "$('#__q16').transition('bounce');"; } ?>
    <?php if($p7[0]=="4"){ echo "$('#__q1').transition('bounce');"; } ?>
    <?php if($p7[0]=="5"){ echo "$('#__q2').transition('bounce');"; } ?>
    <?php if($p8[0]=="yes"){ echo "$('#__q3').transition('bounce');"; } ?>
    <?php if($p9=="yes"){ echo "$('#__q17').transition('bounce');"; } ?>
    <?php if($p13[0]=="1"){ echo "$('#__q4').transition('bounce');"; } ?>
    <?php if($p13[0]=="2"){ echo "$('#__q5').transition('bounce');"; } ?>
    <?php if($p14[0]=="1"){ echo "$('#__q6').transition('bounce');"; } ?>
    <?php if($p14[0]=="2"){ echo "$('#__q7').transition('bounce');"; } ?>
    <?php if($p15[0]=="1"){ echo "$('#__q8').transition('bounce');"; } ?>
    <?php if($p15[0]=="2"){ echo "$('#__q9').transition('bounce');"; } ?>
    <?php if($p16[0]=="5"){ echo "$('#__q10').transition('bounce');"; } ?>
    <?php if($p17[0]=="7"){ echo "$('#__q11').transition('bounce');"; } ?>
    <?php if($p17[0]=="8"){ echo "$('#__q12').transition('bounce');"; } ?>
    <?php if($p18[0]=="5"){ echo "$('#__q13').transition('bounce');"; } ?>
    <?php if($p20=="yes"){ echo "$('#__q14').transition('bounce');"; } ?>
    <?php if($p21[0]=="7"){ echo "$('#__q15').transition('bounce');"; } ?>

});
</script>
</head>
<body id="home">
	<div style="position: fixed; top: 0px; right: 0px; left: 0px; padding-bottom: 1rem; z-index: 999;" class="ui inverted masthead centered segment">
		<div class="ui page grid">
			<div class="column">
				<div class="ui secondary pointing menu">
					<a class="logo item"> ANCTF SURVEY </a>
					<!-- <a class="active item"><i class="flaticon-speech"></i> Resume </a> -->
					<div class="right menu"><a onclick="grabar(false)" class="ui item"> Save & Logout </a></div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="ui vertical feature segment" style="margin-top: 8rem;">
		<div class="ui main text container" style="max-width: 60rem !important;">
			<h2 class="ui header">
				<img class="ui image" src="http://semantic-ui.com/images/icons/school.png">
				<div class="content"> Personal Information </div>
			</h2>
			<!--   FORM   -->
			<form class="ui form aForm">
				<div class="field">
					<div class="four fields">
						<div class="field">
							<div class="default text">First Name (optional)</div>
							<input type="text" placeholder="First Name" value="<?php echo $o_bd->result($res, "fname"); ?>" name="first-name" id="fnam">
						</div>
						<div class="field">
							<div class="default text">Last Name (optional)</div>
							<input type="text" placeholder="Last Name" value="<?php echo $o_bd->result($res, "lname"); ?>" name="last-name" id="lnam">
						</div>
						<div class="field">
							<div class="default text">Your Organisation <span class="_red">(*)</span></div>
							<input type="text" placeholder="Your Organisation" value="<?php echo $o_bd->result($res, "organization"); ?>" name="org" id="org">
						</div>
						<div class="field">
							<div class="default text">Job title <span class="_red">(*)</span></div>
							<input type="text" placeholder="Job title" value="<?php echo $o_bd->result($res, "job"); ?>" name="job" id="job">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="fields">
						<div class="field wide four">
							<div class="default text">Email (optional)</div>
							<input type="text" placeholder="Email" value="<?php echo $o_bd->result($res, "email"); ?>" name="ema" id="ema">
						</div>
						<div class="field wide four">
							<div class="default text">Telephone (optional)</div>
							<input type="text" placeholder="Area code | Number" value="<?php echo $o_bd->result($res, "telephone"); ?>" name="tel" id="tel">
						</div>
						<div class="field wide eight">
							<div class="default text">Size of organisation <span class="_red">(*)</span></div>
							<select class="ui fluid dropdown" name="size" id="typsiz">
							<option value="">Select</option>
							<option value="50" <?php if("50"==$o_bd->result($res, "typesiz")){ echo "selected"; } ?>>Employs less than 50 persons</option>
							<option value="more" <?php if("more"==$o_bd->result($res, "typesiz")){ echo "selected"; } ?>>Employs 50 or more persons</option>
							</select>
						</div>
					</div>
				</div>
				<div class="field">
					<div class="fields">
						<div class="field wide twelve">
							<div class="default text">Type of business organisation (tick as many as apply to your business) <span class="_red">(*)</span></div>
							<select multiple="multiple" class="ui fluid dropdown" name="cat" id="typorg">
							<option value="">Select</option>
							<option value="Customs brokerage" <?php $r = strpos(",".$a_typorg[0].",", ",Customs brokerage,"); if($r!==FALSE){ echo "selected"; } ?>>Customs brokerage</option>
							<option value="Forwarder" <?php $r = strpos(",".$a_typorg[0].",", ",Forwarder,"); if($r!==FALSE){ echo "selected"; } ?>>Forwarder</option>
							<option value="Manufacturer" <?php $r = strpos(",".$a_typorg[0].",", ",Manufacturer,"); if($r!==FALSE){ echo "selected"; } ?>>Manufacturer</option>
							<option value="Importer" <?php $r = strpos(",".$a_typorg[0].",", ",Importer,"); if($r!==FALSE){ echo "selected"; } ?>>Importer</option>
							<option value="Exporter" <?php $r = strpos(",".$a_typorg[0].",", ",Exporter,"); if($r!==FALSE){ echo "selected"; } ?>>Exporter</option>
							<option value="Express carrier" <?php $r = strpos(",".$a_typorg[0].",", ",Express carrier,"); if($r!==FALSE){ echo "selected"; } ?>>Express carrier</option>
							<option value="Carrier" <?php $r = strpos(",".$a_typorg[0].",", ",Carrier,"); if($r!==FALSE){ echo "selected"; } ?>>Carrier</option>
							<option value="Shipping agent" <?php $r = strpos(",".$a_typorg[0].",", ",Shipping agent,"); if($r!==FALSE){ echo "selected"; } ?>>Shipping agent</option>
							<option value="Port operator" <?php $r = strpos(",".$a_typorg[0].",", ",Port operator,"); if($r!==FALSE){ echo "selected"; } ?>>Port operator</option>
							</select>
						</div>
						<div class="field wide four">
							<div class="default text">Other, please specify</div>
							<input type="text" placeholder="Specify" name="other_cat" id="otyporg" value="<?php echo $a_typorg[1]; ?>">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="fields">
						<div class="field wide four">
							<div class="default text">Location <span class="_red">(*)</span></div>
								<select class="ui fluid dropdown" name="loc" id="cou">
								<option value="">Location</option>
								<option value="Adelaide" <?php if("Adelaide"==$a_cou[0]){ echo "selected"; } ?>>Adelaide</option>
								<option value="Brisbane" <?php if("Brisbane"==$a_cou[0]){ echo "selected"; } ?>>Brisbane</option>
								<option value="Canberra" <?php if("Canberra"==$a_cou[0]){ echo "selected"; } ?>>Canberra</option>
								<option value="Darwin" <?php if("Darwin"==$a_cou[0]){ echo "selected"; } ?>>Darwin</option>
								<option value="Hobart" <?php if("Hobart"==$a_cou[0]){ echo "selected"; } ?>>Hobart</option>
								<option value="Melbourne" <?php if("Melbourne"==$a_cou[0]){ echo "selected"; } ?>>Melbourne</option>
								<option value="Sydney" <?php if("Sydney"==$a_cou[0]){ echo "selected"; } ?>>Sydney</option>
								<option value="Perth" <?php if("Perth"==$a_cou[0]){ echo "selected"; } ?>>Perth</option>
								<option value="">Other</option>
								</select>
							</div>
							<div class="field wide four">
								<div class="default text">Other, please specify</div>
								<input type="text" placeholder="Specify" name="other_loc" id="ocou" value="<?php echo $a_cou[1]; ?>">
							</div>
						</div>
					</div>
					<div class="ui button" tabindex="0" onclick="actualizar();">Update personal info</div>
				</form>
				<!--   END FORM   -->
				
				<h4 class="ui horizontal divider header"><i class="tag icon"></i> Main Questions </h4>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">1.- Thinking about the costs and efficiency of international trade as experienced by your business, please describe up to three areas for improvement, in order of priority.</p></div>
					<div class="ui segment">
						<div class="ui labeled fluid input" style="margin-bottom: 5px;">
							<div class="ui label">A</div>
							<input name="q1a" id="q1a" type="text" placeholder="" value="<?php echo $p1[0]; ?>">
						</div>
						<div class="ui labeled fluid input" style="margin-bottom: 5px;">
							<div class="ui label">B</div>
							<input name="q1b" id="q1b" type="text" placeholder="" value="<?php echo $p1[1]; ?>">
						</div>
						<div class="ui labeled fluid input" style="margin-bottom: 5px;">
							<div class="ui label">C</div>
							<input name="q1c" id="q1c" type="text" placeholder="" value="<?php echo $p1[2]; ?>">
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">2.- Thinking about Australia’s import/export laws and procedures, please describe up to three changes you would like to see which could reduce costs or improve the efficiency of international trade.</p></div>
					<div class="ui segment">
						<div class="ui labeled fluid input" style="margin-bottom: 5px;">
							<div class="ui label">A</div>
							<input name="q2a" id="q2a" type="text" placeholder="" value="<?php echo $p2[0]; ?>">
						</div>
						<div class="ui labeled fluid input" style="margin-bottom: 5px;">
							<div class="ui label">B</div>
							<input name="q2b" id="q2b" type="text" placeholder="" value="<?php echo $p2[1]; ?>">
						</div>
						<div class="ui labeled fluid input" style="margin-bottom: 5px;">
							<div class="ui label">C</div>
							<input name="q2c" id="q2c" type="text" placeholder="" value="<?php echo $p2[2]; ?>">
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">3.- Prior to learning of the project of which this survey forms a part, were you aware of the existence of the Australian National Committee on Trade Facilitation (ANCTF)?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q3" id="q3" value="yes" <?php if($p3=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q3" id="q3" value="no" <?php if($p3=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="__q16" style="display: none;" class="ui segments">
					<div class="ui secondary segment"><p class="simple">3.a.- If your answer to 3 was yes, have you been consulted by government or by an industry association on issues related to the ANCTF?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q4" id="q4" value="yes" <?php if($p4=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q4" id="q4" value="no" <?php if($p4=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<h4 class="ui horizontal divider header"><i class="tag icon"></i> Regarding the ANCTF </h4>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">4.- Currently, the ANCTF operates under the government’s administrative arrangements. Should the existence of the ANCTF be enshrined in a legal framework?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q5" id="q5" value="yes" <?php if($p5=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q5" id="q5" value="no" <?php if($p5=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">5.- How strong should the role of the private sector be in the ANCTF?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q6" id="q6" value="1" <?php if($p6=="1"){ echo "checked"; } ?>>
										<label>Private sector representatives should set the agenda, and should determine the outcomes of ANCTF sessions</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q6" id="q6" value="2" <?php if($p6=="2"){ echo "checked"; } ?>>
										<label>Private sector representatives should have an equal status with government representatives in setting the agenda and determining the outcomes of ANCTF sessions</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q6" id="q6" value="3" <?php if($p6=="3"){ echo "checked"; } ?>>
										<label>Private sector representatives should have an advisory role only; the government representatives should set the agenda and determine the outcomes of ANCTF sessions</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">6.- Who should chair the ANCTF?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q7" id="q7" value="1" <?php if($p7[0]=="1"){ echo "checked"; } ?>>
										<label>Department of Immigration and Border Protection</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q7" id="q7" value="2" <?php if($p7[0]=="2"){ echo "checked"; } ?>>
										<label>Australian Border Force</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q7" id="q7" value="3" <?php if($p7[0]=="3"){ echo "checked"; } ?>>
										<label>Department of Foreign Affairs and Trade</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q7" id="q7" value="4" <?php if($p7[0]=="4"){ echo "checked"; } ?>>
										<label>Other Government agency</label>
									</div>
								</div>
								<div class="field" style="display: none" id="__q1">
									<input type="text" name="q7a" id="q7a" placeholder="Please specify" value="<?php echo $p7[1]; ?>">
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q7" id="q7" value="5" <?php if($p7[0]=="5"){ echo "checked"; } ?>>
										<label>Private sector organisation</label>
									</div>
								</div>
								<div class="field" style="display: none" id="__q2">
									<input type="text" name="q7b" id="q7b" placeholder="Please specify" value="<?php echo $p7[2]; ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">7.- Should the chairmanship be rotated?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q8" id="q8" value="yes" <?php if($p8[0]=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field" style="display: none" id="__q3"><input type="text" name="q8a" id="q8a" placeholder="Please specify" value="<?php echo $p8[1]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q8" id="q8" value="no" <?php if($p8[0]=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">8.- Should there be joint Chairs of the ANCTF?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q9" id="q9" value="yes" <?php if($p9=="yes"){ echo "checked"; } ?>>
									    <label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q9" id="q9" value="no" <?php if($p9=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments" id="__q17" style="display: none">
					<div class="ui secondary segment"><p class="simple">8.a.- Please indicate who the joint Chairs of the ANCTF should be.</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="field"><textarea rows="2" name="q10" id="q10"><?php echo $p10; ?></textarea></div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">9.- Should the ANCTF make public its Terms of Reference, Membership, Mission/Goals/Objectives, Work Plans and periodic reports on its activities?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q11" id="q11" value="yes" <?php if($p11=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q11" id="q11" value="no" <?php if($p11=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">10.- Should the Terms of Reference of the ANCTF be limited to its role under Article 23.2 of the WTO Trade Facilitation Agreement (“domestic coordination and implementation of the provisions of the Agreement”) or extend to a wider trade facilitation agenda for Australia?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q12" id="q12" value="1" <?php if($p12=="1"){ echo "checked"; } ?>>
										<label>Limit to Art. 23.2</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q12" id="q12" value="2" <?php if($p12=="2"){ echo "checked"; } ?>>
										<label>Extend to wider trade facilitation agenda</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">11.- Who should fund the ANCTF?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q13" id="q13" value="1" <?php if($p13[0]=="1"){ echo "checked"; } ?>>
										<label>Government</label>
									</div>
								</div>
								<div class="field" id="__q4" style="display: none"><input type="text" name="q13a" id="q13a" placeholder="Please specify agency" value="<?php echo $p13[1]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q13" id="q13" value="2" <?php if($p13[0]=="2"){ echo "checked"; } ?>>
										<label>Private sector</label>
									</div>
								</div>
								<div class="field" id="__q5" style="display: none"><input type="text" name="q13b" id="q13b" placeholder="Please specify" value="<?php echo $p13[2]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q13" id="q13" value="3" <?php if($p13[0]=="3"){ echo "checked"; } ?>>
										<label>Combination of government and private sector</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">12.- Who should provide the Secretariat of the ANCTF?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q14" id="q14" value="1" <?php if($p14[0]=="1"){ echo "checked"; } ?>>
										<label>Government</label>
									</div>
								</div>
								<div class="field" id="__q6" style="display: none"><input type="text" name="q14a" id="q14a" placeholder="Please specify organization" value="<?php echo $p14[1]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q14" id="q14" value="2" <?php if($p14[0]=="2"){ echo "checked"; } ?>>
										<label>Private sector</label>
									</div>
								</div>
								<div class="field" id="__q7" style="display: none"><input type="text" name="q14b" id="q14b" placeholder="Please specify" value="<?php echo $p14[2]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q14" id="q14" value="3" <?php if($p14[0]=="3"){ echo "checked"; } ?>>
										<label>Establish/fund dedicated secretariat</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">13.- Where should ANCTF meetings be held?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q15" id="q15" value="1" <?php if($p15[0]=="1"){ echo "checked"; } ?>>
										<label>Government office</label>
									</div>
								</div>
								<div class="field" id="__q8" style="display: none"><input type="text" name="q15a" id="q15a" placeholder="Please specify" value="<?php echo $p15[1]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q15" id="q15" value="2" <?php if($p15[0]=="2"){ echo "checked"; } ?>>
										<label>Private sector premises</label>
									</div>
								</div>
								<div class="field" id="__q9" style="display: none"><input type="text" name="q15b" id="q15b" placeholder="Please specify" value="<?php echo $p15[2]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q15" id="q15" value="3" <?php if($p15[0]=="3"){ echo "checked"; } ?>>
										<label>Neutral venue (e.g. hotel, university)</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">14.- How often should the ANCTF meet?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q16" id="q16" value="1" <?php if($p16[0]=="1"){ echo "checked"; } ?>>
										<label>Once per year</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q16" id="q16" value="2" <?php if($p16[0]=="2"){ echo "checked"; } ?>>
										<label>Every six months</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q16" id="q16" value="3" <?php if($p16[0]=="3"){ echo "checked"; } ?>>
										<label>Every quarter</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q16" id="q16" value="4" <?php if($p16[0]=="4"){ echo "checked"; } ?>>
										<label>Every month</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q16" id="q16" value="5" <?php if($p16[0]=="5"){ echo "checked"; } ?>>
										<label>Other</label>
									</div>
								</div>
								<div class="field" id="__q10" style="display: none"><input type="text" name="q16a" id="q16a" placeholder="Please specify" value="<?php echo $p16[1]; ?>"></div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">15.- The Government agencies currently represented on the ANCTF are the Department of Immigration and Border Protection, the Australian Border Force, the Department of Foreign Affairs and Trade, Austrade, the Department of Agriculture and Water Resources, the Department of Industry, Innovation and Science and the Department of Infrastructure and Regional Development. Which other Government agencies, if any, should participate?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="1" <?php if($p17[0]=="1"){ echo "checked"; } ?>>
										<label>Office of Transport Security</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="2" <?php if($p17[0]=="2"){ echo "checked"; } ?>>
										<label>Department of Environment</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="3" <?php if($p17[0]=="3"){ echo "checked"; } ?>>
										<label>Department of Finance</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="4" <?php if($p17[0]=="4"){ echo "checked"; } ?>>
										<label>Department of Health</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="5" <?php if($p17[0]=="5"){ echo "checked"; } ?>>
										<label>Digital Transformation Office</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="6" <?php if($p17[0]=="6"){ echo "checked"; } ?>>
										<label>Infrastructure Australia</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="7" <?php if($p17[0]=="7"){ echo "checked"; } ?>>
										<label>State Government agencies</label>
									</div>
								</div>
								<div class="field" id="__q11" style="display: none"><input type="text" name="q17a" id="q17a" placeholder="Please specify" value="<?php echo $p17[1]; ?>"></div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q17" id="q17" value="8" <?php if($p17[0]=="8"){ echo "checked"; } ?>>
										<label>Other</label>
									</div>
								</div>
								<div class="field" id="__q12" style="display: none"><input type="text" name="q17b" id="q17b" placeholder="Please specify" value="<?php echo $p17[2]; ?>"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">16.- The private sector and academic organisations currently represented on the ANCTF are the Australian Federation of International Forwarders, the Customs Brokers and Forwarders Council of Australian, the Export Council of Australia, the Conference of Asia Pacific Express Carriers, Shipping Australia Limited, the American Chamber of Commerce in Australia, the Australian Chamber of Commerce and Industry, the Australian Industry Group, the Board of Airline Representatives of Australia, the Federal Chamber of Automotive Industries, the Food and Beverage Importers Association, Freight and Trade Alliance and the International Network of Customs Universities. Which other private sector organisations, if any, should participate?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q18" id="q18" value="1" <?php if($p18[0]=="1"){ echo "checked"; } ?>>
										<label>Representatives of the insurance industry</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q18" id="q18" value="2" <?php if($p18[0]=="2"){ echo "checked"; } ?>>
										<label>Representatives of the finance industry</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q18" id="q18" value="3" <?php if($p18[0]=="3"){ echo "checked"; } ?>>
										<label>Port/airport operators</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q18" id="q18" value="4" <?php if($p18[0]=="4"){ echo "checked"; } ?>>
										<label>Private laboratories/certification agencies</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q18" id="q18" value="5" <?php if($p18[0]=="5"){ echo "checked"; } ?>>
										<label>Other</label>
									</div>
								</div>
								<div class="field" id="__q13" style="display: none"><input type="text" name="q18a" id="q18a" placeholder="Please specify" value="<?php echo $p18[1]; ?>"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">17.- Should the ANCTF actively liaise with National Committees for Trade Facilitation in key trading partner countries and with any Regional Committees for Trade Facilitation?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q19" id="q19" value="yes" <?php if($p19=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q19" id="q19" value="no" <?php if($p19=="no"){ echo "checked"; } ?>>
										<label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ui segments">
					<div class="ui secondary segment"><p class="simple">18.- Should the ANCTF actively engage in consultation between government and the wider business community?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="inline fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q20" id="q20" value="yes" <?php if($p20=="yes"){ echo "checked"; } ?>>
										<label>YES</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q20" id="q20" value="no" <?php if($p20=="no"){ echo "checked"; } ?>>
								        <label>NO</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="ui segments" id="__q14" style="display: none">
					<div class="ui secondary segment"><p class="simple">18.a.- If yes, by which means?</p></div>
					<div class="ui segment">
						<div class="ui form">
							<div class="grouped fields">
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="1" <?php if($p21[0]=="1"){ echo "checked"; } ?>>
										<label>Permanent consultative committees</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="2" <?php if($p21[0]=="2"){ echo "checked"; } ?>>
										<label>Centres of excellence or expertise</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="3" <?php if($p21[0]=="3"){ echo "checked"; } ?>>
										<label>Network of subject-matter experts</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="4" <?php if($p21[0]=="4"){ echo "checked"; } ?>>
										<label>Peer-to-peer groups</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="5" <?php if($p21[0]=="5"){ echo "checked"; } ?>>
										<label>Implementation working parties</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="6" <?php if($p21[0]=="6"){ echo "checked"; } ?>>
										<label>Conferences</label>
									</div>
								</div>
								<div class="field">
									<div class="ui radio checkbox">
										<input type="radio" name="q21" id="q21" value="7" <?php if($p21[0]=="7"){ echo "checked"; } ?>>
										<label>Other</label>
									</div>
								</div>
								<div class="field" id="__q15" style="display: none"><input type="text" name="q21a" id="q21a" placeholder="Please specify" value="<?php echo $p21[1]; ?>"></div>
							</div>
						</div>
					</div>
				</div>
				
				<a style="float: right;" onclick="grabar(true);"><button class="ui basic button primary"><i class="icon send primary"></i> Finalize and submit </button></a>

				<a style="float: right;" onclick="grabar(false);"><button class="ui yellow basic button"><i class="icon save primary"></i> Save my responses </button></a>

			</div>
		</div>
		
		<div class="ui inverted footer vertical segment center">
			<div class="ui stackable center aligned page grid">

				<div class="ten wide column">
					<h5 class="ui inverted header" style="text-align: left;">Instituto Peruano de Facilitación del Comercio</h5>
						<div class="ui inverted link list">
							<p style="text-align: justify; font-style: italic;">IFCOM is an independent private organization engaged in promoting facilitation of trade through research, analysis and training. Foreign trade proceedings need to be efficient and oriented to reducing cost, easing the internationalization of companies, to boost the country´s competitiveness and growth.</p>
						</div>
				</div>
				<div class="six wide column">
					<h5 class="ui inverted header">Contact Us</h5>
					<div class="ui inverted link list">
						<a href="tel:+511-650-8167" class="item">Phone: (511) 650-8167</a>
						<a href="mailto:info@ipfcom.org" class="item">Email: info@ipfcom.org</a>
						<a href="http://www.ipfcom.org" target="_blank" class="item">Site: www.ipfcom.org</a>
					</div>
				</div>

			</div>
		</div>
  
<!-- SAVE MODAL -->
<div class="ui basic modal __save">
  <div class="ui icon header">
    <i class="save icon"></i>
    Responses was saved!
  </div>
  <div class="content">
    <p>Your survey is incomplete, your responses was saved for completion at a later time.</p>
  </div>
  <div class="actions">
    <div class="ui green basic cancel inverted button">
      <i class="checkmark icon"></i>
      Stay
    </div>
    <div class="ui red inverted button" onclick="goHome();">
      <i class="remove icon"></i>
      Leave
    </div>
  </div>
</div>

<!-- COMPLETE MODAL -->
<div class="ui basic modal __submit">
  <div class="ui icon header">
    <i class="trophy icon"></i>
    Thank you, the survey was submitted!
  </div>
  <div class="content">
    <!-- <p>Your survey is incomplete. Please go back and complete your responses</p> -->
  </div>
  <div class="actions">
    <div class="ui green inverted button" onclick="goHome();">
      <i class="checkmark icon"></i>
      Exit
    </div>
  </div>
</div>


  
<script type="text/javascript">
function actualizar(){

	$(".aForm").addClass('loading');

	var fnam   = $('#fnam').val();
	var lnam   = $('#lnam').val();
	var org    = $('#org').val();
	var job    = $('#job').val();
	var ema    = $('#ema').val();
	var cou    = $('#cou').val()+"|"+$('#ocou').val();
	var tel    = $('#tel').val();
	var typorg = $('#typorg').val()+"|"+$('#otyporg').val();
	var typsiz = $('#typsiz').val();
	$.ajax({
		type: "POST",
		data: "id=<?php echo $c_id; ?>&fnam="+fnam+"&lnam="+lnam+"&org="+org+"&job="+job+"&ema="+ema+"&cou="+cou+"&tel="+tel+"&typorg="+typorg+"&typsiz="+typsiz+"&modo=upd",
		url: "control/usuario.php",
		success: function(respuesta){
			if(respuesta=="1"){
				$(".aForm").removeClass('loading');
				//alert("Datos actualizados con exito");
			}else{
				$(".aForm").removeClass('loading');
				//alert("Verifique algunos datos incorrectos");
			}
		}
	});
}
function grabar(type){
	var art = ""; var blo = ""; var pre = ""; var subpre = ""; var valor  = "";
	
	art = "1"; blo = "1";
	pre = "1";
	subpre = "1"; valor = $("#q1a").val()+"|"+$("#q1b").val()+"|"+$("#q1c").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "2";
	subpre = "1"; valor = $("#q2a").val()+"|"+$("#q2b").val()+"|"+$("#q2c").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "3";
	subpre = "1"; valor = $("input[name='q3']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "4";
	subpre = "1"; valor = $("input[name='q4']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	art = "2"; blo = "1";
	pre = "5";
	subpre = "1"; valor = $("input[name='q5']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "6";
	subpre = "1"; valor = $("input[name='q6']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "7";
	subpre = "1"; valor = $("input[name='q7']:checked").val()+"|"+$("#q7a").val()+"|"+$("#q7b").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "8";
	subpre = "1"; valor = $("input[name='q8']:checked").val()+"|"+$("#q8a").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "9";
	subpre = "1"; valor = $("input[name='q9']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "10";
	subpre = "1"; valor = $("#q10").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "11";
	subpre = "1"; valor = $("input[name='q11']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "12";
	subpre = "1"; valor = $("input[name='q12']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "13";
	subpre = "1"; valor = $("input[name='q13']:checked").val()+"|"+$("#q13a").val()+"|"+$("#q13b").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "14";
	subpre = "1"; valor = $("input[name='q14']:checked").val()+"|"+$("#q14a").val()+"|"+$("#q14b").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "15";
	subpre = "1"; valor = $("input[name='q15']:checked").val()+"|"+$("#q15a").val()+"|"+$("#q15b").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "16";
	subpre = "1"; valor = $("input[name='q16']:checked").val()+"|"+$("#q16a").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "17";
	subpre = "1"; valor = $("input[name='q17']:checked").val()+"|"+$("#q17a").val()+"|"+$("#q17b").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "18";
	subpre = "1"; valor = $("input[name='q18']:checked").val()+"|"+$("#q18a").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "19";
	subpre = "1"; valor = $("input[name='q19']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "20";
	subpre = "1"; valor = $("input[name='q20']:checked").val();
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	pre = "21";
	subpre = "1"; valor = $("input[name='q21']:checked").val()+"|"+$("#q21a").val();;
	$.ajax({
		type: "POST",
		data: "id=&art="+art+"&blo="+blo+"&pre="+pre+"&subpre="+subpre+"&valor="+valor+"&modo=add",
		url: "control/respuesta.php",
		success: function(respuesta){
		}
	});
	
	if(type){
		$('.__submit').modal('show');
	}else{
		$('.__save').modal('show');
	}
	//alert("Survey Complete!");
	//location.href = "cerrar.php";

}
function goHome(){
	location.href = "cerrar.php";
}
</script>
</body>
</html>
