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
			<form action="validar.php" method="POST"><!--abertura form action-->
				<div class="form-header"><!--abertura form header-->
					<div class="title"><!--abertura title-->
						<h1>Cadastre-se</h1>
					</div><!--/fechamento title-->
					<div class="login-button"><!--abertura login-button-->
						<button><a href="login.php" target="_blank">Entrar</a></button>
					</div><!--/fechamento login-button-->
				</div><!--/fechamento form header-->

				<div class="input-group"><!--abertura input-group-->
					<div class="input-box"><!--abertura input-box-->
						<label for="nome">Nome</label>
						<input id="nome" type="text" name="nome" placeholder="Digite o seu Nome" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="sobrenome">Sobrenome</label>
						<input id="sobrenome" type="text" name="sobrenome" placeholder="Digite o seu Sobrenome" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="email">Email</label>
						<input id="email" type="email" name="email" placeholder="Digite o seu Email" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="numero">Celular</label>
						<input id="numero" type="tel" name="numero" placeholder="(92) 90000-0000" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="senha">Senha</label>
						<input id="senha" type="password" name="senha" placeholder="Digite a sua Senha" autofocus required>
					</div><!--/fechamento input-box-->

					<div class="input-box"><!--abertura input-box-->
						<label for="senha">Confirme a sua senha</label>
						<input id="confsenha" type="password" name="confsenha" placeholder="Digite a sua Senha" autofocus required>
					</div><!--/fechamento input-box-->
				</div><!--/fechamento input-group-->

				<div class="continue-button"><!--abertura continue-button-->
					<button><a href="login.php">Continuar</a></button>
				</div><!--/fechamento continue-button-->
			</form><!--/fechamento form action-->
		</div><!--/fechamento form-->
	</div><!--/fechamento container-->

</body>

</html>