<!doctype html>
<html>
	 <head>
		<title>Cadastro do Professor</title>
		<meta name="keywords" content="fatec, cadastro trabalhos , professor, fatec ipiranga, faculdade" />
		<link href="css/sb-admin.css"rel="stylesheet">
	<!-- Custom fonts for this template-->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<!-- Custom styles for this template-->
	<link href="css/sb-admin.css" rel="stylesheet">
	<link href="cadastro professor.css" rel="stylesheet">
	
	</head>
		<body>
		<div class=centralizado>
		<h1>Cadastro Professor</h1>
		<form method="post" action="cadastro-professor.php"> <!--lembrar de alterar para refletir o nome do arquivo-->
		<label>Codigo Funcional:</label><input name="cod_func" type=text required>
		<br>
		<label>Nome:</label><input name="nome" id="nome" required>
		<br>
		<label>email:</label><input name="email" id="email" type="email" required>
		<br>
		<label>Senha:</label><input name="senha" id="senha" type="password" required>
		<br><br>
		<label for="Ativo">Ativo:</label>
		<select name="Ativo" id="Ativo">
		<option value="ops">Sim</option>
		<option value="opN">Nao</option>
		</select>

		<br>
		<br>
		<input type="submit" name="btn1" value="Cadastrar" />
		<input type="submit" name="btn2" value="Pesquisar">
		<input type="submit" name="btn3" value="Alterar">
		<input type="submit" name="btn4" value="Excluir">
		</div>
		<?php
        //$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
        if (isset($_POST["btn1"])) {
            inserir();
        }
		if(isset($_POST["btn3"]))
		{
		alterar();
		}
		
		if(isset($_POST["btn4"]))
		{
		remover();
		}
		
		if(isset($_POST["btn2"]))
		{
		busca();
		}
		//$con->close();		
        ?>
		</body>
		</html>
	
<?php



	function busca()
	{
			$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
			$cod_func = $_POST["cod_func"];
			$sql = "select * from usuario where codigo=$codigo";
			$registros = mysqli_query($con,$sql);
			if($campos = mysqli_fetch_array($registros)){
				echo "<script lang='javascript'>";
				echo "cod_func.value='".$campos["cod_func"] ."';";
				echo "nome.value='".  $campos["nome"] ."';";
				echo "email.value='". $campos["email"] ."';";
				echo "senha.value='". $campos["senha"] ."';";
				echo "</script>";
			} else {
				echo "registro não encontrado!";	
			}

			$con->close();
	}
	function remover()
	{
			$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
			$codigo = $_POST["cod_func"];
			$sql = "delete from usuario where codigo=$cod_func";
			mysqli_query($con,$sql);
			echo "registro removido	com sucesso";
			$con->close();	
	}
	function inserir() {
			$con = new mysqli("baratheon0001.hospedagemdesites.ws", "norto_fatecig", "freiJoao59", "norton_fatecig");
			$cod_func = $_POST["cod_func"];
		    $nome = $_POST["nome"];
			$email = $_POST["email"];
		    $senha = $_POST["senha"];
		    $ativo = $_POST["Ativo"];
		    //var_dump($_POST);die();
		    $sql = "insert into usuario(disciplina, descricao, ativo, curso) values ('$cod_func', '$nome', '$email', '$senha', '$ativo', '$curso')";
		    mysqli_query($con, $sql);
		    echo "registro inserido com sucesso !";
		    $con->close();
	}
	function alterar(){
			$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
			$cod_func = $_POST["cod_func"];
			$nome	= $_POST["nome"];
			$email	= $_POST["email"];
			$senha	= $_POST["senha"];	
			$sql = "update usuario set nome='$nome', email='$email',senha='$senha' where codigo=$codigo";
			mysqli_query($con,$sql);
			echo "registro alterado com sucesso !";
			$con->close();
		}

?>