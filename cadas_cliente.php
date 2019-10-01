<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cadastre-se!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util_cadastro.css">
	<link rel="stylesheet" type="text/css" href="css/main_cadastro.css">
<!--===============================================================================================-->

<script type="text/javascript">
        function ValidarSenha(){
            var  senha = document.getElementById('senha').value.length;
            var senha2 = document.getElementById('senha2').value.length;
            if(senha != senha2){
                document.getElementById('Resul_Conf').style.color = "#ed0707";
                document.getElementById('Resul_Conf').innerHTML = "Senha Não Corresponde com a Primeira!";
				 var btn = document.getElementById('Cadastro');
				 btn.disable = true;
            if(senha2=="" || senha ==""){
                document.getElementById('Resul_Conf').innerHTML = "";
            }
            if(senha == senha2 && senha ==""){
                document.getElementById('Resul_Conf').innerHTML = ""; 
            }    
            }if(senha == senha2 && senha > 0){
                document.getElementById('Resul_Conf').style.color = "#198704";
                document.getElementById('Resul_Conf').innerHTML = "Senhas estão Corretas!";
				var btn = document.getElementById('Cadastro');
				 btn.disable = false;
            }
        }
</script> 	
</head>

<body>
	
	      <form action="cadastroc.php" method="POST">
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Cadastro
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Digite Seu Nome:</span>
					<input class="input100" type="text" name="nome" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Digite Seu Email:</span>
					<input class="input100" type="email" name="email" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">CPF:</span>
					<input class="input100" type="text" name="cpf">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Telefone:(ex.:DD-00000-0000)</span>
					<input class="input100" pattern="^\d{2}-\d{5}-\d{4}$" type="tel" name="telefone" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Data de Nascimento:</span>
					<input class="input100" type="date" name="date" >
					<span class="focus-input100"></span>
				</div> 

				<div class="wrap-input100 validate-input" data-validate="password is required">
					<span class="label-input100">Senha:</span>
					<input class="input100" pattern="[a-zA-Z0-9]+" type="password" name="senha" id="senha">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate="password is required">
					<span class="label-input100">Confirme sua senha:</span>
					<input class="input100" pattern="[a-zA-Z0-9]+" type="password" name="senha2" id="senha2"
					 onkeyup="ValidarSenha();">
					<span class="focus-input100"></span>
				</div>
				<br>
				<p id="Resul_Conf"></p>
				
				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn" href="login_usuario.html" id="Cadastre">
							<span>
							Cadastre-se
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	</form>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
