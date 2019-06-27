<?php
error_reporting(0);
session_start();
if($_SESSION['id']=='') header('location:login'); 
include "act/con.php";
$no=1;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Admin Kuizy</title>
	<link rel="shortcut icon" href="https://bkwzea.bn.files.1drv.com/y4mCRO4CR7_hfnuGpK2AKpBNst8M4eokKcYvX-Dx-NH68Ym1haLsrfKyzK66tgA8XM_d9GKJBdQJUdQTDmp2E2KGYihQPaneF5IvmpL6ZTVLeO1T0PLqwbm79-a4yR1wQy4OGm17-7XpC874ar77NJdZuYLi-GmaBlTxnzW4Owa5qknUW-yfcPc1ZKI4YZ4iEs7uhhb7G4cwCYYAfe-i23sqQ?width=256&height=256&cropmode=none">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
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
	<?php include"tem/sidebar.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="https://kuizy.000webhostapp.com/">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">User</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Halaman User</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Tabel User</div>
					<div class="panel-body">
						<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Konfirmasi</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Konfirmasi</th>            
            </tr>
        </tfoot>
        <tbody>
        <?php
        $sql = "SELECT * FROM user";
        $query = $conn->query($sql);
        while ($row = $query->fetch_assoc()) :?>
        	<tr>
        		<td><?php echo $no;?></td>
        		<td><?php echo $row['nama'];?></td>
        		<td><?php echo $row['email'];?></td>
        		<td><?php if($row['vEmail']==1) echo"<em class='fa fa-check-circle'>&nbsp;</em>"; else echo"<em class='fa fa-times'>&nbsp;</em>";?></td>
        	</tr>
        <?php $no++; endwhile;?>
        </tbody>
    </table>
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
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>

	<script>
    $(document).ready(function() {
	   $('#example').DataTable();
	} );
	</script>

</body>
</html>
