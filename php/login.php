<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="text/css" href="../imagens/capivara-nerd.png">
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>

<body>		
	<section class="area-login">
		<div class="login">
			<div>
				<img src="../imagens/capivara-nerd.png">
			</div>	
		<form action="login.php" method="POST">
			<input type="text" name="nome" placeholder="nome de usuario" autofocus required>
			<input type="password" name="senha" placeholder="sua senha" required>
			<input type="submit" value="entrar">
		</form>
			<p>Ainda não tem uma conta?<a href="cadastro.php" target="_blank">Criar conta</a></p>
		</div>
	</section>

</body>

</html>