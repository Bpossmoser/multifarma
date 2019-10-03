<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro Farmácia</title>
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
	<link rel="stylesheet" type="text/css" href="css/util_farma.css">
	<link rel="stylesheet" type="text/css" href="css/main_farma.css">
<!--===============================================================================================-->
<script type="text/javascript">
        function ValidarSenha(){
            var senha = document.getElementById('senha').value;
			senha = senha.trim();
            var senha2 = document.getElementById('senha2').value;
			senha2 = senha2.trim();
			var btn = document.getElementById('Cadastre');
			
            if(senha != senha2){
                document.getElementById('Resul_Conf').style.color = "#ed0707";
                document.getElementById('Resul_Conf').innerHTML = "Senha Não Corresponde com a Primeira!";
				btn.disabled = true;
				btn.style.opacity = "0.5";
            if(senha2 == "" || senha == ""){
                document.getElementById('Resul_Conf').innerHTML = "";
				btn.disabled = true;
				btn.style.opacity = "0.5";
            }
            if(senha == senha2 && senha == ""){
                document.getElementById('Resul_Conf').innerHTML = "";
				btn.disabled = true;
				btn.style.opacity = "0.5";
            }    
            }if(senha == senha2){
                document.getElementById('Resul_Conf').style.color = "#198704";
                document.getElementById('Resul_Conf').innerHTML = "Senhas estão Corretas!";
	            btn.disabled = false;
				btn.style.opacity = null;
	            }
        }
</script>
</head>
<body>


     <form action="cadfarmacia.php" method="POST">
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Cadastro
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Razão Social:</span>
					<input class="input100" type="text" name="razao" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Nome Fantasia:</span>
					<input class="input100" type="text" name="fantasia" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100"> Email da Empresa:</span>
					<input class="input100" type="text" name="email" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">CNPJ:</span>
					<input class="input100" type="text" name="cnpj">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Inscrição Estadual:</span>
					<input class="input100" type="text" name="inscricao_est" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Inscrição Municipal:</span>
					<input class="input100" type="text" name="inscricao_mun" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">logradouro:</span>
					<input class="input100" type="text" name="logradouro" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">número local:</span>
					<input class="input100" type="text" name="num_local" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Bairro:</span>
					<input class="input100" type="text" name="bairro" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Complemento:</span>
					<input class="input100" type="text" name="complemento" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">cep:</span>
					<input class="input100" type="text" name="cep" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">cidade:</span>
					<input class="input100" type="text" name="cidade" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">uf:</span>
					<input class="input100" type="text" name="uf" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Telefone:(ex.:DD-00000-0000)</span>
					<input class="input100" pattern="^\d{2}-\d{5}-\d{4}$" type="tel" name="telefone" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "password is required">
					<span class="label-input100">Senha:</span>
					<input class="input100"  pattern="[a-zA-Z0-9]+" type="password" name="senha"
					id = "senha" >
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
						<button class="contact100-form-btn" href="login_farmacia.html" id="Cadastre">
							<span>
							Cadastre-se
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
		</form>
	</div>
	



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

