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
				<li class="active">Soal</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Halaman Bank Soal</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Tabel Soal</div>
					<div class="panel-body">
						<table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Kategori</th>
                <th>Konten</th>
                <th>Pertanyaan</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>Jawaban</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Nomor</th>
                <th>Kategori</th>
                <th>Konten</th>
                <th>Pertanyaan</th>
                <th>A</th>
                <th>B</th>
                <th>C</th>
                <th>D</th>
                <th>Jawaban</th>
                <th></th>
                <th></th>
            </tr>
        </tfoot>
        <tbody>
        <?php
        $sql = "SELECT * FROM soal";
        $query = $conn->query($sql);
        while ($row = $query->fetch_assoc()) :?>
        	<tr>
        		<td><?php echo $no;?></td>
        		<td>
        		    <?php 
        		        if($row['kategori']==1) echo "Alat Musik";
        		        else if($row['kategori']==2) echo "Lagu";
        		        else if($row['kategori']==3) echo "Pakaian";
        		        else if($row['kategori']==4) echo "Rumah";
        		        else if($row['kategori']==5) echo "Tari";
        		    ?>
        		</td>
        		<td><?php if($row['gambar']) echo "Tersedia"; else echo"Kosong";?></td>
        		<td><?php echo $row['soal'];?></td>
                <td><?php echo $row['pil_a'];?></td>
                <td><?php echo $row['pil_b'];?></td>
                <td><?php echo $row['pil_c'];?></td>
                <td><?php echo $row['pil_d'];?></td>
        		<td><?php echo $row['jawaban'];?></td>
        		<td><a href="update/<?php echo $row['kd_soal'];?>"><button type="button" class="btn btn-sm btn-warning">Update</button></a></td>
        		<td><form method="post" action="act/proses_delete_soal.php"><input name="kode" hidden value="<?php echo $row['kd_soal'];?>"><button type="submit" class="btn btn-sm btn-danger">Delete</button></form></td>
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
	   $('#example').DataTable( {
        "scrollX": true
        });
	} );
	</script>

</body>
</html>
