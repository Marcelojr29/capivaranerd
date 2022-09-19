<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro CapivaraNerd</title>
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
	<link rel="shortcut icon" type="text/css" href="../imagens/capivara-nerd.png">
</head>

<body>
	
	<div class="container-cadastro"><!--abertura container-->
		<div class="form-image"><!--abertura form image-->
			<img src="../imagens/capivara-nerd.png" width="350px" alt="CapivaraNerd">
		</div><!--/fechamento form image-->
		<div class="form"><!--abertura form-->
			<form action="#"><!--abertura form action-->
				<div class="form-header"><!--abertura form header-->
					<div class="title"><!--abertura title-->
						<h1>Cadastre-se</h1>
					</div><!--/fechamento title-->
					<div class="login-button"><!--abertura login-button-->
						<button><a href="login.html" target="_blank">Entrar</a></button>
					</div><!--/fechamento login-button-->
				</div><!--/fechamento form header-->

				<div class="input-group"><!--abertura input-group-->
					<div class="input-box"><!--abertura input-box-->
						<label for="firstname">Nome</label>
						<input id="firstname" type="text" name="firstname" placeholder="Digite o seu Nome" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="lastname">Sobrenome</label>
						<input id="lastname" type="text" name="lastname" placeholder="Digite o seu Sobrenome" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Digite o seu Email" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="number">Celular</label>
						<input id="number" type="tel" name="number" placeholder="(92) 90000-0000" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="password">Senha</label>
						<input id="password" type="password" name="password" placeholder="Digite a sua Senha" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="password">Confirme a sua senha</label>
						<input id="password" type="password" name="confirmpassword" placeholder="Digite a sua Senha" autofocus required>
					</div><!--/fechamento input-box-->
				</div><!--/fechamento input-group-->

				<div class="gender-inputs"><!--abertura gender-inputs-->
					<div class="gender-title"><!--abertura gender-title-->
						<h6>Gênero</h6>
					</div><!--/fechamento gender-title-->

					<div class="gender-group"><!--abertura gender-group-->
						<div class="gender-input"><!--abertura gender-input-->
							<input type="radio" id="female" name="gender">
							<label for="female">Feminino</label>
						</div><!--/fechamento gender-input-->

						<div class="gender-input"><!--abertura gender-input-->
							<input type="radio" id="male" name="gender">
							<label for="male">Masculino</label>
						</div><!--/fechamento gender-input-->

						<div class="gender-input"><!--abertura gender-input-->
							<input type="radio" id="others" name="gender">
							<label for="others">Outros</label>
						</div><!--/fechamento gender-input-->

						<div class="gender-input"><!--abertura gender-input-->
							<input type="radio" id="none" name="gender">
							<label for="none">Prefiro não dizer</label>
						</div><!--/fechamento gender-input-->
					</div><!--/fechamento gender-group-->
				</div><!--/fechamento gender-inputs-->

				<div class="continue-button"><!--abertura continue-button-->
					<button><a href="login.html">Continuar</a></button>
				</div><!--/fechamento continue-button-->
			</form><!--/fechamento form action-->
		</div><!--/fechamento form-->
	</div><!--/fechamento container-->

</body>

</html>