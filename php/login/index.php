<?PHP
session_start();
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>BigLeaf</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="backimg">

	<div class="limiter">
		<div class="container-login100">
			<!-- <img src="images/img3.png" > -->

			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/LogoSemFundoBordeWhite.png" alt="logotipo BigLeaf-Seja Benvido Pagina de Login">
				</div>

				<form action="result.php" class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate="Email Necessário">
						<input class="input100" type="email" name="email" placeholder="Email" alt="Digite seu email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Senha Necessária">
						<input class="input100" type="password" placeholder="Senha" name="pass"  alt="Digite sua senha">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Entrar" alt="Entrar no perfil">


					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Esqueceu
						</span>
						<a class="txt2" href="http://localhost/bigleaf_nodejs/php/alterar_senha/index-alterar-senha.php" alt="Esqueceu sua senha? Entre Aqui para alterar senha">
							Nome de usuario / Senha?
						</a>
					</div>
					<div class="text-center p-t-12">
						<span class="txt2" style="color:blue" alt="Senha Alterada com sucesso">
							<?php
							if (isset($_SESSION["senha_alterada"])) {
								echo ($_SESSION["senha_alterada"]);
								unset($_SESSION["senha_alterada"]);
							}
							?>
						</span>
					</div>
					<div class="text-center p-t-12">
						<span class="txt2" style="color:red" alt="Senha Invalida">
							<?php
							if (isset($_SESSION["erro"])) {
								echo ($_SESSION["erro"]);
								unset($_SESSION["erro"]);
							}
							?>
						</span>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="http://localhost:8081/usuarios/novo" alt="Crie uma conta BigLeaf">
							Crie uma conta
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

				</form>

			</div>
		</div>
	</div>




	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>