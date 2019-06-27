<?php 
error_reporting(0);
session_start();
if($_SESSION['id']=='') header('location:login'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin Kuizy</title>
    <link rel="shortcut icon" href="https://bkwzea.bn.files.1drv.com/y4mCRO4CR7_hfnuGpK2AKpBNst8M4eokKcYvX-Dx-NH68Ym1haLsrfKyzK66tgA8XM_d9GKJBdQJUdQTDmp2E2KGYihQPaneF5IvmpL6ZTVLeO1T0PLqwbm79-a4yR1wQy4OGm17-7XpC874ar77NJdZuYLi-GmaBlTxnzW4Owa5qknUW-yfcPc1ZKI4YZ4iEs7uhhb7G4cwCYYAfe-i23sqQ?width=256&height=256&cropmode=none">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!--<script>-->
<!--function changeImage()-->
<!--{-->
<!--imgName=document.getElementById("mytxtgambar").value;-->
<!--image = document.getElementById('mygambar');-->
<!--image.src = imgName;-->
<!--alert(imgName)-->
<!--}-->
<!--</script>-->
    	<?php include"tem/sidebar.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="https://kuizy.000webhostapp.com">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">User</li>
				<li class="active">Add</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Halaman Tambah User</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Form Tambah User</div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="post" action="act/proses_input_user.php">
							    <div class="form-group">
									<label>Full Name</label>
									<input type="text" class="form-control" name="nama">
								</div>
								<div class="form-group">
									<label>E-Mail</label>
									<input type="text" class="form-control" name="email">
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="form-group" style="text-align:center">
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
								</div>
							</form>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
			<div class="col-sm-12">
				<p class="back-link">&copy; 2018 Kuizy Studio</p>
			</div>
		</div><!-- /.row -->
	</div><!--/.main-->
	
<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
