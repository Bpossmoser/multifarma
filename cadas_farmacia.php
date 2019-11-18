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
            }if(senha == senha2 ){
				document.getElementById('Resul_Conf').style.color = "#198704";
                document.getElementById('Resul_Conf').innerHTML = "Senhas estão Corretas!";
				var valor = document.getElementById('senha').value.length;
				if( valor > 7){
	           	 	btn.disabled = false;
					btn.style.opacity = null;
	            }
		}
	}
		function Senha(){
			var senha = document.getElementById('senha').value.length;
			var btn = document.getElementById('Cadastre');
			if( senha > 7){
				document.getElementById("Senha").innerHTML="Senha Forte";
				document.getElementById("Senha").style.color = "#198704";
				btn.disabled = true;
				btn.style.opacity = "0.5";
			}else{
				document.getElementById("Senha").innerHTML="Senha Fraca";
				document.getElementById("Senha").style.color = "#ed0707";
				btn.disabled = true;
				btn.style.opacity = "0.5";

			}
			if(senha < 1 ){
				document.getElementById("Senha").innerHTML="";
				btn.disabled = true;
				btn.style.opacity = "0.5";
			}
		}
</script>
</head>
<body>


     <form action="cadfarmacia.php" method="POST" enctype="multipart/form-data" >
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
					<input class="input100" type="text" name="cnpj" id="cnpj">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Inscrição Estadual:</span>
					<input class="input100" type="text" name="inscricao_est" id="est" >
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Inscrição Municipal:</span>
					<input class="input100" type="text" name="inscricao_mun" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100">cep:</span>
					<input class="input100" type="text" name="cep" id="cep"
					onblur="pesquisacep(this.value)">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">logradouro:</span>
					<input class="input100" type="text" name="logradouro" id="logradouro" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100">número local:</span>
					<input class="input100" type="text" name="num_local" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Bairro:</span>
					<input class="input100" type="text" name="bairro" id="bairro" >
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Complemento:</span>
					<input class="input100" type="text" name="complemento" >
					<span class="focus-input100"></span>
				</div>
				
			<div class="container justify-content-between ">
			<div class="d-flex flex-row ">	
				<div class="wrap-input100 validate-input " >
					<span class="label-input100">cidade:</span>
					<input class="input100" type="text" name="cidade" id="cidade">
					<span class="focus-input100"></span>
				</div>
				<div class="Select">
					<span class="label-input">Unidade Federativa:</span>
					<select name="uf" id="uf">
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AP">Amapá</option>
						<option value="AM">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DF">Distrito Federal</option>
						<option value="ES">Espírito Santo</option>
						<option value="GO">Goiás</option>
						<option value="MA">Maranhão</option>
						<option value="MT">Mato Grosso</option>
						<option value="MS">Mato Grosso do Sul</option>
						<option value="MG">Minas Gerais</option>
						<option value="PA">Pará</option>
						<option value="PB">Paraíba</option>
						<option value="PR">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Rio de Janeiro</option>
						<option value="RN">Rio Grande do Norte</option>
						<option value="RS">Rio Grande do Sul</option>
						<option value="RO">Rondônia</option>
						<option value="RR">Roraima</option>
						<option value="SC">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
					</select>
				</div>	
			</div>
			</div>
			<br>	
				<div class="wrap-input100 validate-input">
					<span class="label-input100">Telefone:(ex.: (DD) 00000-0000)</span>
					<input class="input100"  type="tel" name="telefone" id = "telefone">
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "password is required">
					<span class="label-input100">Senha:</span>
					<input class="input100"  pattern="[a-zA-Z0-9]+" type="password" name="senha"
					id = "senha" onkeyup= "Senha();" >
					<span class="focus-input100"></span>
				</div>
				<p id="Senha"></p>
				<br>
				<div class="wrap-input100 validate-input" data-validate="password is required">
					<span class="label-input100">Confirme sua senha:</span>
					<input class="input100" pattern="[a-zA-Z0-9]+" type="password" name="senha2" id="senha2"
					 onkeyup="ValidarSenha();">
					<span class="focus-input100"></span>
				</div>
				<div class="col-md-12 my-3">
						<div class="wrap-input100 validate-input" data-validate="Campo Obrigatório">
						<input type="file" name="foto" placeholder="Imagem">
				</div>
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
<script src="jquery-3.4.1.min.js"></script>
<script src="jquery.mask.js"></script>
<script>
$(document).ready(function(){
	$('#cnpj').mask('00.000.000/0000-00', {reverse: true});
	$('#est').mask('000.000.000.000', {reverse: true});
	$('#telefone').mask('(00) 00000-0000');
});

</script>
<script type="text/javascript" >
 function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('logradouro').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
           
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('logradouro').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('logradouro').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
               

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };

    </script>
</body>
</html>

