<!DOCTYPE html>
<html>
<head>
	<!-- Standard Meta -->
	<meta charset="utf-8">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0" name="viewport"><!-- Site Properities -->
	<title>ANCTF SURVEY</title>
	<link href="semantic-ui/semantic.css" rel="stylesheet" type="text/css">
	<link href="homepage.css" rel="stylesheet" type="text/css">
	<link href="iconfonts/flaticon.css" rel="stylesheet" type="text/css">
	<script src="jquery.js"></script>
	<script src="semantic-ui/semantic.js"></script>
	<script src="homepage.js"></script>

	<script>
		$(function(){
	        $('.ui.card').popup();
	        $('#loggin, #_login').on('click',function(){
	          $('#login')
	            .modal('show')
	          ;
	        })
	        $('#singup, #_singup').on('click',function(){
	          $('#register').modal('show');
	        });
	    });
	</script>
</head>
<body id="home">
	<div class="ui inverted masthead centered segment">
		<div class="ui page grid">
			<div class="column">
				<div class="ui secondary pointing menu">
					<a class="logo item">ANCTF SURVEY</a>
					<!-- <a class="active item"><i class="flaticon-speech"></i> Resume</a>
					<a class="item" id="_singup"><i class="flaticon-plus"></i> Register</a>
					<a class="item"><i class="flaticon-heart"></i> Continue</a> -->
					<div class="right menu">
						
						 <a class="ui item" id="_login">Login</a>
					</div>
				</div>
				<div class="ui hidden transition information">
					<h1 class="ui inverted centered header">ANCTF SURVEY</h1>
					<!-- <p class="ui centered lead">IFCOM is an independent private organization engaged in promoting facilitation of trade through research, analysis and training. Foreign trade proceedings need to be efficient and oriented to reducing cost, easing the internationalization of companies, to boost the country´s competitiveness and growth.
					</p> -->
					<a class="large basic inverted animated fade ui button" href="#" id="singup">
						<div class="visible content">
							Start Survey
						</div>
						<div class="hidden content">
							Register Now
						</div>
					</a>
					<a class="large basic inverted animated fade ui button" href="#" id="loggin">
						<div class="visible content">
							Continue 
						</div>
						<div class="hidden content">
							Enter & continue
						</div>
					</a>
					<br><br><br>
				</div>
			</div>
		</div>
	</div>
	<div class="ui vertical feature segment" style="margin-top: 1rem; display: none;">
		<div class="ui centered page grid">
			<div class="fourteen wide column">
				<div class="ui three column center aligned stackable divided grid">
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-connecting icon"></i> Courses
						</div>
						<p>Take your kitty to a cat-ducation course and learn how to treat her well.</p>
						<p><a class="ui button" href="#">Learn</a></p>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-calendar icon"></i> Library
						</div>
						<p>Dig through our cat library to found out amazing things you can do with your kitty.</p>
						<p><a class="ui green right labeled icon button" href="#">Research <i class="right flaticon-move icon"></i></a></p>
					</div>
					<div class="column column-feature">
						<div class="ui icon header">
							<i class="flaticon-speech icon"></i> Community
						</div>
						<p>Get feedback on your cat from a community of loving pet owners on our online...</p>
						<p><a class="ui button" href="#">Share</a></p>
					</div>
				</div>
			</div>
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
	</div><!-- modal's -->
	<div class="ui small basic test modal" id='login'>
		<div class="ui icon header">
			<i class="privacy icon"></i> Login
		</div>
		<div class="content center">
			<!--<h5>If you have any progress from this survey, please continue!</h5>-->
			<form class="ui form">
				<div class="ui two column centered grid">
					<div class="column">
						<label style="text-align: left; color: white;">Username</label>
						<input id="txusu" name="txusu" placeholder="Username" required="true" type="text">
					</div>
				</div>
				<div class="ui two column centered grid">
					<div class="column">
						<label style="text-align: left; color: white;">Password</label>
						<input id="txpas" name="txpas" placeholder="Password" required="true" type="password">
					</div>
				</div>
				<h5 style="display: none" id="lmsj" class="ui red header"></h5>
			</form>
		</div>
		<div class="actions center">
			<div class="ui green inverted button" onclick="login();">
				<i class="checkmark icon"></i> Login
			</div>
			<div class="ui red basic cancel inverted button">
				<i class="remove icon"></i> Cancel
			</div>
		</div>
	</div><!-- modal's -->
	<div class="ui small basic test modal" id='register'>
		<div class="ui icon header">
			<i class="add user icon"></i>Register
		</div>
		<div class="content center">
			<!--<h5>If you have any progress from this survey, please continue!</h5>-->
			<form class="ui form">
				<div class="three fields">
					<div class="field left">
						<label style="text-align: left; color: white;">Username</label> <input id="txrusu" name="txrusu" placeholder="Username" required="true" type="text">
					</div>
					<div class="field">
						<label style="text-align: left; color: white;">Password</label> <input id="txrpas" name="txrpas" placeholder="Password" required="true" type="password">
					</div>
					<div class="field">
						<label style="text-align: left; color: white;">Confirm password</label> <input id="txcpas" name="txcpas" placeholder="Confirm password" required="true" type="password">
					</div>
				</div>
				<h5 style="display: none" id="rmsj" class="ui red header"></h5>
			</form>
		</div>
		<div class="actions center">
			<div class="ui green inverted button" onclick="registro();">
				<i class="checkmark icon"></i> Register
			</div>
			<div class="ui red basic cancel inverted button">
				<i class="remove icon"></i> Cancel
			</div>
		</div>
	</div>
	<script type="text/javascript">
	function registro(){
	   //var pno = $("#txrfnam").val();
	   //var sno = $("#txrlnam").val();
	   var pno = "";
	   var sno = "";
	   var usu = $("#txrusu").val();
	   var pas = $("#txrpas").val();
	   var rpa = $("#txcpas").val();
	   // if(pno.length==0){
	   //  alert("Ingrese 1er nombre");
	   //  $("#txrfnam").focus(); $("#txrfnam").val(''); $("#txrlnam").val(''); $("#txrusu").val(''); $("#txrpas").val(''); $("#txcpas").val('');
	   //  return;
	   // }
	   // if(sno.length==0){
	   //  alert("Ingrese 2do nombre");
	   //  $("#txrlnam").focus(); $("#txrfnam").val(''); $("#txrlnam").val(''); $("#txrusu").val(''); $("#txrpas").val(''); $("#txcpas").val('');
	   //  return;
	   // }
	   if(usu.length==0){
	       //alert("Ingrese usuario");
	       $('#txrusu').transition('jiggle');
	       $("#txrusu").focus(); //$("#txrfnam").val(''); $("#txrlnam").val(''); $("#txrusu").val(''); $("#txrpas").val(''); $("#txcpas").val('');
	       return;
	   }
	   if(pas.length==0){
	       //alert("Ingrese clave");
	       $('#txrpas').transition('jiggle');
	       $("#txrpas").focus(); //$("#txrfnam").val(''); $("#txrlnam").val(''); $("#txrusu").val(''); $("#txrpas").val(''); $("#txcpas").val('');
	       return;
	   }
	   if(rpa.length==0){
	       //alert("Repita clave");
	       $('#txcpas').transition('jiggle');
	       $("#txcpas").focus(); //$("#txrfnam").val(''); $("#txrlnam").val(''); $("#txrusu").val(''); $("#txrpas").val(''); $("#txcpas").val('');
	       return;
	   }
	   if(pas!=rpa){
	       //alert("Verifique las claves");
	       $('#rmsj').html('Sorry your passwords do not match.').show(500);
	       $('#txcpas, #txrpas').transition('jiggle');
	       $("#txcpas").focus(); //$("#txrfnam").val(''); $("#txrlnam").val(''); $("#txrusu").val(''); $("#txrpas").val(''); $("#txcpas").val('');
	       return;
	   }
	   $.ajax({
	       type: "POST",
	       data: "usu="+usu+"&pas="+pas+"&fnam="+pno+"&lnam="+sno+"&modo=add",
	       url: "control/usuario.php",
	       success: function(respuesta){
	           // $("#txrfnam").val('');
	           // $("#txrlnam").val('');
	           // $("#txrusu").val('');
	           // $("#txrpas").val('');
	           // $("#txcpas").val('');
	           if(respuesta=="1"){
	               location.href='home.php';
	           }else if(respuesta=="2"){
	           		$('#txrusu').transition('jiggle');
	           		$('#rmsj').html('Username is already taken.').show(500);
	               //alert("Verifique usuario ya registrado");
	           }else{
	           		$('#rmsj').html('Please, check your internet connection and tray again.').show(500);
	               //alert("Verifique algunos datos incorrectos");
	           }
	       }
	   });
	}
	$('#txrusu,#txrpas, #txcpas').keypress(function (e) {
	   if (e.which == 13) {
	       registro();
	   }
	});

	function login(){
	   var usu = $("#txusu").val();
	   var pas = $("#txpas").val();
	   if(usu.length==0){
	       //alert("Ingrese usuario");
	       $('#txusu').transition('jiggle');
	       $("#txusu").focus(); //$("#txusu").val(''); $("#txpas").val('');
	       return;
	   }
	   if(pas.length==0){
	       //alert("Ingrese clave");
	       $('#txpas').transition('jiggle');
	       $("#txpas").focus(); //$("#txusu").val(''); $("#txpas").val('');
	       return;
	   }
	   if(!pas.length==0 && !usu.length==0){
		   $.ajax({
		     type: "POST",
		     data: "usu="+usu+"&pas="+pas+"&modo=login",
		     url: "control/usuario.php",
		     success: function(respuesta){
		       // $("#txusu").val('');
		       // $("#txpas").val('');
		       if(respuesta!="0"){
		         location.href='home.php';
		       }else{
		       		$('#lmsj').html('Incorrect username or password.').show(500);
		        	//alert("Incorrect username or password.");
		       }
		     }
		   });
		}
	}
	$('#txusu,#txpas').keypress(function (e) {
	   if (e.which == 13) {
	       login();
	   }
	});
	</script>
</body>
</html>