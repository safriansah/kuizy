<?php
error_reporting(0);
session_start();
if($_SESSION['id']=='') header('location:login'); 
include "act/con.php";

$warna = array("#2ecc71", "#3498db", "#e74c37", "#e67e22", "#f1c40f");
$hig = array("#27ae60", "#2980b9", "#c0392b", "#d35400", "#f39c12");

$sql = "SELECT count(*)as jumlah FROM user where vEmail='1'";
$query = $conn->query($sql);
$row = $query->fetch_assoc();

$sql = "SELECT count(*)as jumlah FROM nilai";
$query = $conn->query($sql);
$row2 = $query->fetch_assoc();

$sql = "SELECT count(*)as jumlah FROM soal";
$query = $conn->query($sql);
$row3 = $query->fetch_assoc();
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
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php include"tem/sidebar.php";?>	
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-12 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-clipboard color-blue"></em>
							<div class="large"><?php echo $row3['jumlah']; ?></div>
							<div class="text-muted">Total Soal Seluruh Kategori</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-gamepad color-orange"></em>
							<div class="large"><?php echo $row2['jumlah']; ?>x</div>
							<div class="text-muted">Dimainkan</div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-md-4 col-lg-4 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large"><?php echo $row['jumlah']; ?></div>
							<div class="text-muted">User Terverifikasi</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Jumlah Soal
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pie-chart" ></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Jumlah Permainan
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="chart" id="polar-area-chart" ></canvas>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/.row-->
		
		<div class="row">
<?php
$no=0;
$sql = "SELECT MAX(nilai)as max,ROUND(AVG(nilai),1)AS avg FROM nilai";
$query = $conn->query($sql);
$row = $query->fetch_assoc();
?>
			<div class="col-md-2">
				<div class="panel panel-default">
					<div class="panel-heading">Keseluruhan</div>
					<div class="panel-body">
						<p>Nilai Tertinggi : <?php echo $row['max']; ?><br>Rata-rata : <?php echo $row['avg']; ?></p>
					</div>
				</div>
			</div>
<?php
$no=0;
$sql = "SELECT kategori.nama_kat as nama,MAX(nilai)as max,ROUND(AVG(nilai),1)AS avg FROM nilai,kategori WHERE nilai.id_kategori=kategori.kd_kat GROUP BY id_kategori ASC";
$query = $conn->query($sql);
while ($row = $query->fetch_assoc()) :
?>
			<div class="col-md-2">
				<div class="panel panel-primary">
					<div class="panel-heading" style="background-color:<?php echo $warna[$no]; ?>"><?php echo $row['nama']; ?></div>
					<div class="panel-body">
						<p>Nilai Tertinggi : <?php echo $row['max']; ?><br>Rata-rata : <?php echo $row['avg']; ?></p>
					</div>
				</div>
			</div>
<?php $no++; endwhile;?>
			
		</div><!-- /.row -->
		
		<div class="col-sm-12">
				<p class="back-link">&copy; 2018 Kuizy Studio</p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
<script>
var pieData = [];
<?php
$no=0;
$sql = "SELECT count(*)as jumlah, nama_kat FROM `soal`,kategori where soal.kategori=kategori.kd_kat GROUP BY kategori ASC ";
$query = $conn->query($sql);
while ($row = $query->fetch_assoc()) :?>
pieData.push({
                value: <?php echo $row['jumlah']; ?>,
				color: "<?php echo $warna[$no]; ?>",
				highlight: "<?php echo $hig[$no]; ?>",
				label: "<?php echo $row['nama_kat']; ?>"
            });
<?php $no++; endwhile;?>
	window.onload = function () {
	
	var chart4 = document.getElementById("pie-chart").getContext("2d");
	window.myPie = new Chart(chart4).Pie(pieData, {
	responsive: true,
	segmentShowStroke: false
	});
	
};
var polarData = [];
<?php
$warna = array("#2ecc71", "#3498db", "#e74c37", "#e67e22", "#f1c40f");
$hig = array("#27ae60", "#2980b9", "#c0392b", "#d35400", "#f39c12");
$no=0;
$sql = "SELECT count(*)as jumlah, nama_kat FROM nilai,kategori where nilai.id_kategori=kategori.kd_kat GROUP BY kd_kat ASC";
$query = $conn->query($sql);
while ($row = $query->fetch_assoc()) :?>
polarData.push({
                value: <?php echo $row['jumlah']; ?>,
				color: "<?php echo $warna[$no]; ?>",
				highlight: "<?php echo $hig[$no]; ?>",
				label: "<?php echo $row['nama_kat']; ?>"
            });
<?php $no++; endwhile;?>
    var chart6 = document.getElementById("polar-area-chart").getContext("2d");
	window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	segmentShowStroke: false
	});
</script>
		
</body>
</html>
