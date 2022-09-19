<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro CapivaraNerd</title>
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css">
	<link rel="shortcut icon" type="text/css" href="capivara-nerd.png">
</head>

<body>
	
	<div class="container">
		<div class="form-image">
			<img src="../imagens/capivara-nerd.png" width="350px" alt="CapivaraNerd">
		</div>
		<div class="form">
			<form action="#">
				<div class="form-header">
					<div class="title">
						<h1>Cadastre-se</h1>
					</div>
					<div class="login-button">
						<button><a href="login.html" target="_blank">Entrar</a></button>
					</div>
				</div>

				<div class="input-group">
					<div class="input-box">
						<label for="firstname">Nome</label>
						<input id="firstname" type="text" name="firstname" placeholder="Digite o seu Nome" autofocus required>
					</div>

					<div class="input-box">
						<label for="lastname">Sobrenome</label>
						<input id="lastname" type="text" name="lastname" placeholder="Digite o seu Sobrenome" autofocus required>
					</div>

					<div class="input-box">
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Digite o seu Email" autofocus required>
					</div>

					<div class="input-box">
						<label for="number">Celular</label>
						<input id="number" type="tel" name="number" placeholder="(92) 90000-0000" autofocus required>
					</div>

					<div class="input-box">
						<label for="password">Senha</label>
						<input id="password" type="password" name="password" placeholder="Digite a sua Senha" autofocus required>
					</div>

					<div class="input-box">
						<label for="password">Confirme a sua senha</label>
						<input id="password" type="password" name="confirmpassword" placeholder="Digite a sua Senha" autofocus required>
					</div>
				</div>

				<div class="gender-inputs">
					<div class="gender-title">
						<h6>Gênero</h6>
					</div>

					<div class="gender-group">
						<div class="gender-input">
							<input type="radio" id="female" name="gender">
							<label for="female">Feminino</label>
						</div>

						<div class="gender-input">
							<input type="radio" id="male" name="gender">
							<label for="male">Masculino</label>
						</div>

						<div class="gender-input">
							<input type="radio" id="others" name="gender">
							<label for="others">Outros</label>
						</div>

						<div class="gender-input">
							<input type="radio" id="none" name="gender">
							<label for="none">Prefiro não dizer</label>
						</div>
					</div>
				</div>

				<div class="continue-button">
					<button><a href="login.html">Continuar</a></button>
				</div>
			</form>
		</div>
	</div>

</body>

</html>