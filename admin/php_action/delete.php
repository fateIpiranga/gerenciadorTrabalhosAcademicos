<?php

	session_start();
	
	$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
	mysqli_set_charset($con, "utf8");

	if(mysqli_connect_error()):
		echo "Erro na conexão: ".mysqli_connect_error();
	endif;
	
	if(isset($_GET['codigo'])):
		$codigo = mysqli_escape_string($con, $_GET['codigo']);
		
		$sql = "DELETE FROM trabalho_academico WHERE codigo = $codigo";
		
		if(mysqli_query($con, $sql)):
			$_SESSION['mensagem'] = "Trabalho Excluído";
			header('Location: ../tela_repositorio_academico.php');
		else:
			$_SESSION['mensagem'] = "Erro ao excluir";
			header('Location: ../tela_repositorio_academico.php');
		endif;
		
	endif;
	mysqli_close($con);	
?>