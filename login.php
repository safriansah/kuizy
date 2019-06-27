<?php
error_reporting(0);
session_start();
if($_SESSION['id']<>'') header('location:soal'); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kuizy - Login</title>
    <link rel="shortcut icon" href="https://bkwzea.bn.files.1drv.com/y4mCRO4CR7_hfnuGpK2AKpBNst8M4eokKcYvX-Dx-NH68Ym1haLsrfKyzK66tgA8XM_d9GKJBdQJUdQTDmp2E2KGYihQPaneF5IvmpL6ZTVLeO1T0PLqwbm79-a4yR1wQy4OGm17-7XpC874ar77NJdZuYLi-GmaBlTxnzW4Owa5qknUW-yfcPc1ZKI4YZ4iEs7uhhb7G4cwCYYAfe-i23sqQ?width=256&height=256&cropmode=none">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Log in</div>
				<div class="panel-body">
					<form role="form" action="act/proses_login.php" method="post">
						<fieldset>
							<div class="form-group">
								<input class="form-control" required placeholder="Username" name="username" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" required placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group" style="text-align:right">
							    <button type="submit" class="btn btn-primary">Login</button>
							</div>
					    </fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
