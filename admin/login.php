<?php
	$alertMessage = "";
	error_reporting(E_ALL); 
	ini_set("display_errors", 1);

	include("../lib/Usuario.php");	
	if(isset($_GET["f"])){
		$email = $_POST["email"];	
		$senha = $_POST["password"];	
		$obj = new Usuario();
		if($obj->login($email, $senha)==1){					
			$_SESSION["usuario"]=$obj;	
			$redirect = "dashboard.php";
			header("location:$redirect");
			die();
		} else {
			$alertMessage = "<div class='alert alert-danger'><strong>Acesso negado !</strong><br>usuário ou senha invalidos.</div>";
		}		
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="N-CMS v8.0">
  <meta name="author" content="Norton Glaser">
  <title>N-CMS v8.0</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">

    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">
		<?php echo $alertMessage; ?>
        <form method="post" action="login.php?f=1">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password">
          </div>          
          <input type="submit" name="btn1" class="btn btn-primary btn-block" value="Login" />
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.php">Register an Account</a>
          <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
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
