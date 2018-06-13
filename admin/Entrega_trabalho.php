<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">    <!-- Correção de Caracteres Especiais -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="Formulário de Submissão de Atividade" content="">
  <meta name="Michael Araújo" content="">
  <title>SB Admin - Start Bootstrap Template</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Incluse JQuery--> 
  <script src="gulpfile.js"></script>
</head>

	<!-- Formulário de Submissão de Atividade -->
	
<body class="bg-dark">
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Submissão de Trabalho</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              

                <label for="nomeCurso">Curso</label>

				<select class="form-control"  id="nomeCurso" type="text" aria-describedby="cursoHelp" placeholder="Escolha o Curso!" name="Curso" required onClick="mudar();">
				

					<!-- Aqui temos as options dentro do select, estou atribuindo o valor 0 pra ela, utilizaremos esse value para puxar o código do banco -->
					<option value="0"> Nenhum menu relacionado</option>
					
						<?php
							//$servidor = 'localhost';
							//$usuario = 'root';
							//$senha = '';
							//$bancodedados = 'entrega_trablho';


						// Aqui fazemos a coneção com o banco e salvamos na variavel $con
							$conexao = mysqli_connect("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
						// $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
						// Aqui estamos dando um select no banco trazendo o codigo e nome da tabela menu que foi a tabela q eu precisava usar quando o status for 1 (ativo)
							// $sql = "select codigo, codigoAtividade from menu where status=1";
							$sql = "select codigo, nomeCurso from curso where status=1 ";
						// Aqui salvo a pesquisa no result ( acho que é isso ) 
							$result = mysqli_query($conexao, $sql);
						// Aqui abre o while enquanto o variavel registro nao for achado na lista do result
							while ($registro = @mysqli_fetch_array($result)) 
							{
						// Salvo os resultdos nos campos correspondetes
								$codigo = $registro ["codigo"];
								$nomeCurso = $registro ["nomeCurso"];
						// Exibo na tela usando o echo e o comendo em htlm		
								echo"<option value='$codigo'> $nomeCurso </option>";

							}					
						?>
				
					
				</select>              
            </div>
          </div>
          
		  <div class="form-group">
            <label for="trabalho">Trabalho</label>
				<!-- Aqui é o selec para mostrar a lista suspensa, vamos puxar o menu do banco nesse select-->
				<select class="form-control" id="nomeTrabalho" type="text" aria-describedby="textoHelp" placeholder="Escolha o trabalho a ser submetido!" name="Trabalho" required>

					<!-- Aqui temos as options dentro do select, estou atribuindo o valor 0 pra ela, utilizaremos esse value para puxar o código do banco -->
					<option value="0"> Nenhum menu relacionado</option>
						
						<?php
							//$servidor = 'localhost';
							//$usuario = 'root';
							//$senha = '';
							//$bancodedados = 'entrega_trablho';



						// Aqui fazemos a coneção com o banco e salvamos na variavel $con
							$conexao = mysqli_connect("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
						// $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
						// Aqui estamos dando um select no banco trazendo o codigo e nome da tabela menu que foi a tabela q eu precisava usar quando o status for 1 (ativo)
							// $sql = "select codigo, codigoAtividade from menu where status=1";
							$sql = "select codigo, titulo, descritivo, dtFim from atividade where status>=1";
						// Aqui salvo a pesquisa no result ( acho que é isso ) 
							$result = mysqli_query($conexao, $sql);
						// Aqui abre o while enquanto o variavel registro nao for achado na lista do result
							while ($registro = @mysqli_fetch_array($result)) {
						// Salvo os resultdos nos campos correspondetes
								$codigo = $registro ["codigo"];
								$titulo = $registro ["titulo"];
						// Exibo na tela usando o echo e o comendo em htlm		
								echo"<option value='$codigo'> $titulo </option>";

		}					
					?>
					
				</select>              
          </div>
          
		  <div class="form-group">  
					<label for="DescricaoAtividade">Descrição da Atividade</label></br>
					<label class="d-block small mt-3" for="DescAtividade" id="DescAtividade">
					
						<?php
							//$servidor = 'localhost';
							//$usuario = 'root';
							//$senha = '';
							//$bancodedados = 'entrega_trablho';


						// Aqui fazemos a coneção com o banco e salvamos na variavel $con
							$conexao = mysqli_connect("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
						// $conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
						// Aqui estamos dando um select no banco trazendo o codigo e nome da tabela menu que foi a tabela q eu precisava usar quando o status for 1 (ativo)
							// $sql = "select codigo, codigoAtividade from menu where status=1";
							$sql = "select codigo, titulo, descritivo, dtFim from atividade where status>=1";
						// Aqui salvo a pesquisa no result ( acho que é isso ) 
							$result = mysqli_query($conexao, $sql);
						// Aqui abre o while enquanto o variavel registro nao for achado na lista do result
							while ($registro = @mysqli_fetch_array($result)) 
							{
						// Salvo os resultdos nos campos correspondetes
								$codigo = $registro ["codigo"];
								$descritivo = $registro ["descritivo"];
						// Exibo na tela usando o echo e o comendo em htlm		
								echo"$descritivo";
							}
							
					?>
</label>
		  
		  <div class="form-group">  
			<div class="form-row">

					<label for="DataDeEntregaLimite">Data limite para Submissão </label></br>
					<label label class="d-block small mt-3" for="HorarioLimite" id="HorarioLimite" value = "0">
					
							<?php

							$servidor = 'localhost';
							$usuario = 'root';
							$senha = '';
							$bancodedados = 'entrega_trablho';


						// Aqui fazemos a coneção com o banco e salvamos na variavel $con
							// $con = mysqli_connect("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
							$conexao = mysqli_connect($servidor, $usuario, $senha, $bancodedados);
						// Aqui estamos dando um select no banco trazendo o codigo e nome da tabela menu que foi a tabela q eu precisava usar quando o status for 1 (ativo)
							// $sql = "select codigo, codigoAtividade from menu where status=1";
							$sql = "select codigo, dtFim from atividade where status>=1";
						// Aqui salvo a pesquisa no result ( acho que é isso ) 
							$result = mysqli_query($conexao, $sql);
						// Aqui abre o while enquanto o variavel registro nao for achado na lista do result
							while ($registro = @mysqli_fetch_array($result)) 
							{
						// Salvo os resultdos nos campos correspondetes
								$codigo = $registro ["codigo"];
								$dtFim = $registro ["dtFim"];
						// Exibo na tela usando o echo e o comendo em htlm		
								echo"$dtFim ";
							}
						
							?>
					</label>
   
				</div>
			
		  
		   <div class="form-group">  
					<label for="UrlTrabalho">URL do Trabalho (OneDrive, Drive, ...) </label>
					<input class="form-control" id="UrlTrabalho" type="Url" aria-describedby="uploadHelp" name="UrlTrabalho" required>          
				</div>
				
          </div>
          
		  <input class="btn btn-primary btn-block" value="Submeter"/>

        </form>
		
        <div class="text-center">
          <a class="d-block small mt-3" href="faq.html">Dúvidas</a> 
        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

 

<script lang="javascript" src="jquery-3.3.1.min.js"></script>
<script lang="javascript">

