<?php

	session_start();
	
	$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
	mysqli_set_charset($con, "utf8");

	if(mysqli_connect_error()):
		echo "Erro na conexão: ".mysqli_connect_error();
	endif;


//pesquisa um registro atraves do ID no BD
if(isset($_POST["btnPesquisar"])){
		$sql = "select * from trabalho_academico where 
					codigo=".$codigo;
		$resultado = mysqli_query($conn,$sql);
		if($dados = mysqli_fetch_array($resultado)) {
			 $titulo = $dados['titulo'];
			 $subTitulo = $dados['subTitulo'];
			 $autores = $dados['autores'];
			 $orientador = $dados['orientador'];
			 $resumo = $dados['resumo'];
			 $resumoIngles = $dados['resumoIngles'];
			 $dataTrabalho = $dados['dataTrabalho'];
			 $curso = $dados['curso'];
			 $dataCadastro = $dados['dataCadastro'];
			 
		} else {
			echo "registro de dados não existe";
		}		
	}
	
?>