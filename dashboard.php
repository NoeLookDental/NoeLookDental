<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Consola</title>
	<link rel="stylesheet" href="admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="admin/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="admin/css/bootstrap-social.css">
	<link rel="stylesheet" href="admin/css/bootstrap-select.css">
	<link rel="stylesheet" href="admin/css/fileinput.min.css">
	<link rel="stylesheet" href="admin/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="admin/css/style.css">


</head>

<body>
<?php include("includes/header.php");?>

	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">
				
				<div class="row">
					<div class="col-md-12">

						</br></br><h2 class="page-title">Consola</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 ">Mi Perfil</div>

												</div>
											</div>
											<a href="my-profile.php" class="block-anchor panel-footer">Detalles <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">Mis Reservas</div>

												</div>
											</div>
											<a href="appointment-details.php" class="block-anchor panel-footer text-center">Ver Todo &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>

								</div>
							</div>
						</div>





					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js2/jquery.min.js"></script>
	<script src="js2/bootstrap-select.min.js"></script>
	<script src="js2/bootstrap.min.js"></script>
	<script src="js2/jquery.dataTables.min.js"></script>
	<script src="js2/dataTables.bootstrap.min.js"></script>
	<script src="js2/Chart.min.js"></script>
	<script src="js2/fileinput.js"></script>
	<script src="js2/chartData.js"></script>
	<script src="js2/main.js"></script>

	<script>

	window.onload = function(){

		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		});

		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>

</body>




<style> .foot{text-align: center; border: 1px solid black;}</style>
</html>
