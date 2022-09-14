<!DOCTYPE html>
<html lang="pt-br">

<head>

	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap');

	*{
		padding: 0;
		margin: 0;
		box-sizing: border-box;
		font-family: 'Inter', sans-serif;
	}

	body{
		width: 100%;
		height: 100vh;
		display: flex;
		justify-content: center;
		align-items: center;
		background: #1b1f27;
		color: #cbd0f7;
	}

	.container{
		width: 80%;
		height: 80vh;
		display: flex;
		box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.212);
	}

	.form-image{
		width: 50%;
		display: flex;
		justify-content: center;
		align-items: center;
		padding: 1rem;
	}

	.form{
		width: 50%;
		display: flex;
		justify-content: center;
		align-items: center;
		flex-direction: column;
		background-color: #181920;
		padding: 3rem;
	}

	.form-header{
		margin-bottom: 3rem;
		display: flex;
		justify-content: space-between;
	}

	.login-button{
		display: flex;
		align-items: center;

	}

	.login-button button{
		border: none;
		background-color: #5568fe;
		padding: 0.4rem 1rem;
		border-radius: 5px;
		cursor: pointer;
	}

	.login-button button:hover{
		background-color: #6b63fff1;
	}

	.login-button button a{
		text-decoration: none;
		font-weight: 500;
		color: #fff;
	}

	.form-header h1::after{
		content: '';
		display: block;
		width: 5rem;
		height: 0.3rem;
		background-color: #6c63ff;
		margin: 0 auto;
		position: absolute;
		border-radius: 10px;
	}

	.input-group{
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
		padding: 1rem 0;
	}

	.input-box{
		display: flex;
		flex-direction: column;
		margin-bottom: 1rem;
	}

	.input-box input{
		margin: 0.6rem 0;
		padding: 0.8rem 1.2rem;
		border: none;
		/*outline: none;*/
		background-color: #252a34;
		color: #cbd0f7;
		border-radius: 10px;
		box-shadow: 1px 1px 6px #0000001c;
	}

	/*.input-box input:hover{
		background-color: #eeeeee75;
	}*/

	.input-box input:focus-visible{
		outline: 1px solid #6c63ff;
	}

	.input-box label,
	.gender-title h6{
		font-size: 0.75rem;
		font-weight: 600;
	}

	.input-box input:placeholder{
		color: #000000be;
	}

	.gender-group{
		display: flex;
		justify-content: space-between;
		margin-top: 0.62rem;
		padding: 0 0 0.5rem;
	}

	.gender-input{
		display: flex;
		align-items: center;
	}

	.gender-input input{
		margin-right: 0.35rem;
	}

	.gender-input label{
		font-size: 0.81rem;
		font-weight: 600;
	}

	.continue-button button{
		width: 100%;
		margin-top: 2.5rem;
		border: none;
		background-color: #6c63ff;
		padding: 0.62rem;
		border-radius: 5px;
		cursor: pointer;
	}

	.continue-button button:hover{
		background-color: #6b63fff1;
	}

	.continue-button button a{
		text-decoration: none;
		font-size: 0.93rem;
		font-weight: 500;
	}

	@media screen and (max-width: 1330px){
		.form-image{
			display: none;
		}

		.container{
			width: 50%;
		}

		.form{
			width: 100%;
		}
	}

	@media screen and (max-width: 1064px){
		.container{
			width: 90%;
			height: auto;
		}

		.input-group{
			flex-direction: column;
			overflow-y: scroll;
			flex-wrap: nowrap;
			max-height: 10rem;
			padding-right: 5rem;
		}

		.gender-inputs{
			margin-top: 2rem;
		}

		.gender-group{
			flex-direction: column;
		}

		.gender-input{
			margin-top: 0.5rem;
		}
	}


	</style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro CapivaraNerd</title>
	<link rel="shortcut icon" type="text/css" href="capivara-nerd.png">
</head>

<body>
	
	<div class="container">
		<div class="form-image">
			<img src="capivara-nerd.png" width="350px" alt="CapivaraNerd">
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