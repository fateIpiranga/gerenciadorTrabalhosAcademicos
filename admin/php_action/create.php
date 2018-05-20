<?php

	session_start();

	$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
	mysqli_set_charset($con, "utf8");

	if(mysqli_connect_error()):
		echo "Erro na conexão: ".mysqli_connect_error();
	endif;

if(isset($_POST['inserir'])):
	
	$titulo = mysqli_escape_string($con, $_POST['titulo']);
	$subTitulo = mysqli_escape_string($con, $_POST['subTitulo']);
	$autores =  mysqli_escape_string($con, $_POST['aluno1'].', '.$_POST['aluno2'].', '.$_POST['aluno3'].', '.$_POST['aluno4']);
	$orientador = mysqli_escape_string($con, $_POST['orientador']);
	$resumo = mysqli_escape_string($con, $_POST['resumo']);
	$resumoIngles = mysqli_escape_string($con, $_POST['resumoIngles']);
	$palavrasChaves = mysqli_escape_string($con, $_POST['palavrasChaves']);
	$dataTrabalho = mysqli_escape_string($con, $_POST['dataTrabalho']);
	
	$curso = mysqli_escape_string($con, $_POST['curso']);
	$status = mysqli_escape_string($con, $_POST['status']);
	$url = mysqli_escape_string($con, $_POST['url']);
	$arquivo = mysqli_escape_string($con, $_POST['arquivo']);
			

	$sql = "insert into trabalho_academico(titulo, subTitulo, autores, orientador, resumo, resumoIngles, palavrasChaves, dataTrabalho, dataCadastro, curso ) 
		values ('$titulo', '$subTitulo', '$autores', '$orientador', '$resumo', '$resumoIngles', '$palavrasChaves', '$dataTrabalho', now(), '$curso')"; 
		
	
	if(mysqli_query($con, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../tela_repositorio_academico.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../tela_repositorio_academico.php');
	endif;
	
endif;
mysqli_close($con);	
?>