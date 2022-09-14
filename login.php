<!DOCTYPE html>
<html lang="pt-br">
<head>

	<style type="text/css">

			body{
			background-color: #1b1f27;
			font-family: arial, Helvetica, sans-serif;gf
			overflow: hidden;

		}

		.area-login{
			display: flex;
			height: 100vh;
			justify-content: center;
			align-items: center;
		}

		.login{
			display: flex;
			flex-direction: column;
			align-items: center;
			background-color: #181920;
			width: 355px;
			height: 320px;
			padding: 35px;
			border-radius: 10px;
		}

		.login form{
			display: flex;
			flex-direction: column;
			width: 100%;
		}

		.login input{
			margin-top: 10px;
			background-color: #252a34;
			border: none;
			height: 45px;
			outline: none;
			border-radius: 8px;
			color: #cbd0f7;
			padding-left: 10px;
		}

		.login img{
			width: 100px;
			height: auto;

		}

		.input::placeholder{
			color: #cbd0f7;
			font-size: 14px;
		}

		form [type="submit"]{
			display: block;
			background-color: #5568fe;
			font-size: 20px;
			text-transform: uppercase;
			font-weight: bold;
			cursor: pointer;
		}

		p{
			color: #cbd0f7;
		}

		a{
			color: #5568fe;
			text-decoration: none;
			margin-left: 10px;
		}

	</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="shortcut icon" type="text/css" href="capivara-nerd.png">
</head>

<body>		
	<section class="area-login">
		<div class="login">
			<div>
				<img src="capivara-nerd.png">
			</div>	
		<form action="login.php" method="POST">
			<input type="text" name="nome" placeholder="nome de usuario" autofocus required>
			<input type="password" name="senha" placeholder="sua senha" required>
			<input type="submit" value="entrar">
		</form>
			<p>Ainda não tem uma conta?<a href="cadastro.html" target="_blank">Criar conta</a></p>
		</div>
	</section>

</body>

</html>