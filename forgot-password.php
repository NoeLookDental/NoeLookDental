<?php
session_start();
include('includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$contact=$_POST['contact'];
$stmt=$mysqli->prepare("SELECT email,contactNo,password FROM userregistration WHERE (email=? && contactNo=?) ");
				$stmt->bind_param('ss',$email,$contact);
				$stmt->execute();
				$stmt -> bind_result($username,$email,$password);
				$rs=$stmt->fetch();
				if($rs)
				{
				$pwd=$password;				
				}

				else
				{
					echo "<script>alert('Invalid Email/Contact no or password');</script>";
				}
			}
				?>

<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>User Forgot Password</title>

	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="admin/css/bootstrap-social.css">
	<link rel="stylesheet" href="admin/css/bootstrap-select.css">
	<link rel="stylesheet" href="admin/css/fileinput.min.css">
	<link rel="stylesheet" href="admin/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="admin/css/style.css">
</head
<body>
	
	<div class="login-page bk-img" style="background-image: url(img/login-bg.jpg);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Olvido de Contraseña</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
							<?php if(isset($_POST['login']))
{ ?>
					<p>Tu contraseña es <?php echo $pwd;?><br> Cambia la contraseña después de acceder</p>
					<?php }  ?>
								<form action="" class="mt" method="post">
									<label for="" class="text-uppercase text-sm">Tu correo electrónico</label>
									<input type="email" placeholder="Email" name="email" class="form-control mb">
									<label for="" class="text-uppercase text-sm">Tu número de contacto</label>
									<input type="text" placeholder="Contact no" name="contact" class="form-control mb">
									

									<input type="submit" name="login" class="btn btn-primary btn-block" value="ingresar" >
								</form>
							</div>
						</div>
						<div class="text-center text-light">
							<a href="index.php" class="text-light">Deseas ingresar ahora?</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="js2/jquery.min.js"></script>
	<script src="js2/bootstrap-select.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>
	<script src="js2/jquery.dataTables.min.js"></script>
	<script src="js2/dataTables.bootstrap.min.js"></script>
	<script src="js2/Chart.min.js"></script>
	<script src="js2/fileinput.js"></script>
	<script src="js2/chartData.js"></script>
	<script src="js2/main.js"></script>
</body>
</html>