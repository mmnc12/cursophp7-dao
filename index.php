<?php 

	require_once("config.php");

	//Carrega um usuário pelo id
	//$root = new Usuario();
	//$root->loadbyid(3);
	//echo $root;

	//Carrega uma lista de usuários
	//$lista = Usuario::getList();
	//echo json_encode($lista);


	//Carrega uma lista de usuarios pelo login
	//$search = Usuario::search("ro");
	//echo json_encode($search);

	//Carrega um usuário usando o login e senha
	//$usuario = new Usuario();
	//$usuario->login("user", "12345");
	//echo $usuario;

	/*
	//Inserindo um novo usuário
	$aluno = new Usuario("Aluno", "@lu0");

	$aluno->insert();

	echo $aluno;
	*/

	$usuario = new Usuario();

	$usuario->loadbyid("7");

	$usuario->update("Aluno_1", "!@#$%¨&*");

	echo $usuario;


 ?>