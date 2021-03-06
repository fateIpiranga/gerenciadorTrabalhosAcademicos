<?php

	$con = new mysqli("baratheon0001.hospedagemdesites.ws","norto_fatecig","freiJoao59","norton_fatecig");
	mysqli_set_charset($con, "utf8");

	if(mysqli_connect_error()):
		echo "Erro na conexão: ".mysqli_connect_error();
	endif;
	
	if(isset($_GET['codigo'])):
		$codigo = mysqli_escape_string($con, $_GET['codigo']);
		
		$sql = "SELECT * FROM trabalho_academico WHERE codigo = '$codigo'";
		
		/*
		$sql = "SELECT ta.titulo, ta.subTitulo, ta.autores, ta.orientador, ta.resumo, ta.resumoIngles, ta.dataTrabalho, ta.palavrasChaves, c.nomeCurso
		FROM trabalho_academico ta INNER JOIN curso c ON c.codigo = ta.codigo WHERE ta.codigo = '$codigo'";
		*/
		
		$resultado = mysqli_query($con, $sql);
		$dados = mysqli_fetch_array($resultado);
	endif;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Editar Cadastro de TCC</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="charts.html">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Charts</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-table"></i>
            <span class="nav-link-text">Tables</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Components</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Navbar</a>
            </li>
            <li>
              <a href="cards.html">Cards</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">Example Pages</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
              <a href="login.html">Login Page</a>
            </li>
            <li>
              <a href="register.html">Registration Page</a>
            </li>
            <li>
              <a href="forgot-password.html">Forgot Password Page</a>
            </li>
            <li>
              <a href="blank.html">Blank Page</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Menu Levels</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a href="#">Second Level Item</a>
            </li>
            <li>
              <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
              <ul class="sidenav-third-level collapse" id="collapseMulti2">
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
                <li>
                  <a href="#">Third Level Item</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-link"></i>
            <span class="nav-link-text">Link</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div>
        </li>
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
	
	<div class="container-fluid">
      
		<div class="form-area"> 
	  
			<form action="php_action/update.php" method="POST">
			<input type="hidden" name="codigo" value="<?php echo $dados['codigo'];?>">
					  
				<h1>Alterar Trabalho Acadêmico</h1>
				</br>
						
				<div class="form-group col-md-8">
					<label for="titulo">Título:</label>
					<input type="text" class="form-control" id="titulo" name="titulo" value="<?php echo $dados['titulo']; ?>">
				</div>
						
				<div class="form-group col-md-8">
					<label for="subtitulo">Subtítulo:</label>
					<input type="text" class="form-control" id="subTitulo" name="subTitulo" value="<?php echo $dados['subTitulo']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="dataTrabalho">Data:</label>
					<input type="date" class="form-control" id="dataTrabalho" name="dataTrabalho" value="<?php echo $dados['dataTrabalho']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="palavrasChaves">Palavras-chaves:</label>
					<input type="text" class="form-control" id="palavrasChaves" name="palavrasChaves" placeholder="Tags" value="<?php echo $dados['palavrasChaves']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="resumo">Resumo:</label>
					<textarea class="form-control" rows="5" id="resumo" name="resumo" ><?php echo $dados['resumo']; ?></textarea>
				</div>
				
				<div class="form-group col-md-8">
					<label for="resumoIngles">Resumo Inglês:</label>
					<textarea class="form-control" rows="5" id="resumoIngles" name="resumoIngles"> <?php echo $dados['resumoIngles']; ?></textarea>
				</div>
				
				<div class="form-group col-md-8">
					<label for="curso">Curso:</label>
					  <select class="form-control" id="curso" name="curso" value="<?php echo $dados['curso']; ?>">
						<option value="<?php echo $dados['curso']; ?>">Análise e Desenvolvimento de Sistemas</option>
						<option value="<?php echo $dados['curso']; ?>">Eventos</option>
						<option value="<?php echo $dados['curso']; ?>">Gestão Comercial</option>
						<option value="<?php echo $dados['curso']; ?>">Gestão de Recursos Humanos</option>
					  </select>
				</div>
				
				<div class="form-group col-md-8">
					<label for="orientador">Orientador:</label>
					<input type="text" class="form-control" id="orientador" name="orientador" value="<?php echo $dados['orientador']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="aluno1">Nome do Aluno 1:</label>
					<input type="text" class="form-control" id="aluno1" name="aluno1" value="<?php echo $dados['aluno1']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="aluno2">Nome do Aluno 2:</label>
					<input type="text" class="form-control" id="aluno2" name="aluno2" value="<?php echo $dados['aluno2']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="aluno3">Nome do Aluno 3:</label>
					<input type="text" class="form-control" id="aluno3" name="aluno3" value="<?php echo $dados['aluno3']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="aluno4">Nome do Aluno 4:</label>
					<input type="text" class="form-control" id="aluno4" name="aluno4" value="<?php echo $dados['aluno4']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="url">URL:</label>
					<input type="url" class="form-control" id="url" name="url" value="<?php echo $dados['url']; ?>">
				</div>
					  
				<div class="form-group col-md-8">
					<label for="arquivo">Documento do Trabalho:</label>
					<input type="file" class="form-control" id="arquivo" name="arquivo" value="<?php echo $dados['arquivo']; ?>">
				</div>
					  
				<button type="submit" class="btn btn-primary" name="editar">Atualizar</button>
				<a href="tela_repositorio_academico.php" class="btn btn-success">Lista de Trabalhos</a>
				
				<?php
				mysqli_close($con);
				?>
				
			</form>
		
		</div>
	
	</div>
	  
	<!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
