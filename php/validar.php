<?php  
	require_once('conexao.php');

	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$numero = $_POST['numero'];
	$senha = $_POST['senha'];
	$confsenha = $_POST['confsenha'];

	$bancoDados = new db();

	$link = $bancoDados -> conecta_mysql();

	$sql = "insert into capy (nome, sobrenome, email, numero, senha, confsenha) values ('$nome', '$sobrenome', '$email', '$numero', '$senha', '$confsenha')";

	mysqli_query($link,$sql);















?>