<?php
error_reporting(0);
session_start();
if($_SESSION['id']=='') header('location:soal'); 
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
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/datepicker3.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<script>
function changeKategori()
{
var x = document.getElementById("mySelect");
var i = x.selectedIndex; 
if (x.options[i].text === "Lagu") {
		document.getElementById('mytxtgambar').setAttribute('onchange','changeAudio();');
        document.getElementById("myaudio").style.display = "block";
		document.getElementById("mygambar").style.display = "none";
    } else {
		document.getElementById('mytxtgambar').setAttribute('onchange','changeImage();');
		document.getElementById("mygambar").style.display = "block";
        document.getElementById("myaudio").style.display = "none";
    }
//alert(x.options[i].text);
}
function changeImage()
{
imgName=document.getElementById("mytxtgambar").value;
image = document.getElementById('mygambar');
image.src = imgName;
//alert(imgName)
}
function changeAudio()
{
imgName=document.getElementById("mytxtgambar").value;
image = document.getElementById('myaudio');
image.src = imgName;
//alert(imgName)
}
</script>
	<?php include"tem/sidebar.php"; ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="https://kuizy.000webhostapp.com">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Soal</li>
				<li class="active">Update</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Halaman Update Soal</h1>
			</div>
		</div><!--/.row-->
				
		
		<div class="row">
			<div class="col-lg-12">
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Form Update Soal</div>
					<div class="panel-body">
			            <div class="col-md-6">
			                <?php
                            $sql = "SELECT * FROM soal where kd_soal='$_GET[kd]'";
                            $query = $conn->query($sql);
                            $row = $query->fetch_assoc();
                            ?>
							<form role="form" method="post" action="../act/proses_update_soal.php">
								<input name="kode" value="<?php echo $_GET['kd']; ?>" hidden>
								<div class="form-group">
									<label>Kategori</label>
									    <select name='kategori' onchange="changeKategori()" id='mySelect' class="form-control">
									        <option selected>Pilih Kategori</option>
									        <option value="1" <?php if($row['kategori']=='1') echo"selected"; ?>>Alat Musik</option>
									        <option value="2" <?php if($row['kategori']=='2') echo"selected"; ?>>Lagu</option>
									        <option value="3" <?php if($row['kategori']=='3') echo"selected"; ?>>Pakaian</option>
									        <option value="4" <?php if($row['kategori']=='4') echo"selected"; ?>>Rumah</option>
									        <option value="5" <?php if($row['kategori']=='5') echo"selected"; ?>>Tari</option>
									   </select>
								</div>
								<div class="form-group">
                                	<label>Konten</label>
									<audio controls id="myaudio" class="img-responsive" style="margin: 12px 0px;max-height:128px;border: 1px solid #ddd;">
                                        <source src="<?php echo $row['gambar']; ?>" type="audio/ogg">
                                        <source src="<?php echo $row['gambar']; ?>" type="audio/mpeg">
                                        Your browser does not support the audio element.
                                    </audio>
                                    <img id="mygambar" src="<?php echo $row['gambar']; ?>" class="img-responsive" style="margin: 12px 0px;min-height:128px;border: 1px solid #ddd;" alt="">
                                	<input type="text" onchange="changeImage()" id="mytxtgambar" name="gambar" class="form-control" placeholder="Masukkan URL Konten" value="<?php echo $row['gambar']; ?>">
                                </div>
								<div class="form-group">
									<label>Pertanyaan</label>
									<textarea required name="pertanyaan" class="form-control" rows="3"><?php echo $row['soal']; ?></textarea>
								</div>
								<div class="form-group">
									<label>Pilihan A</label>
									<textarea required name="a" class="form-control" rows="3"><?php echo $row['pil_a']; ?></textarea>
								</div>
								<div class="form-group">
									<label>Pilihan B</label>
									<textarea required name="b" class="form-control" rows="3"><?php echo $row['pil_b']; ?></textarea>
								</div>
								<div class="form-group">
									<label>Pilihan C</label>
									<textarea required name="c" class="form-control" rows="3"><?php echo $row['pil_c']; ?></textarea>
								</div>
								<div class="form-group">
									<label>Pilihan D</label>
									<textarea required name="d" class="form-control" rows="3"><?php echo $row['pil_d']; ?></textarea>
								</div>
								<div class="form-group">
									<label>Jawaban Yang Benar</label>
									<div class="radio">
										<label>
											<input type="radio" value="a" name="jawaban" id="optionsRadios1"  <?php if($row['jawaban']=='a') echo"checked"; ?>>A
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="b" name="jawaban" id="optionsRadios2" <?php if($row['jawaban']=='b') echo"checked"; ?>>B
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="c" name="jawaban" id="optionsRadios3" <?php if($row['jawaban']=='c') echo"checked"; ?>>C
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" value="d" name="jawaban" id="optionsRadios3" <?php if($row['jawaban']=='d') echo"checked"; ?>>D
										</label>
									</div>
								</div>
								<div class="form-group" style="text-align:center">
									<button type="submit" class="btn btn-primary">Simpan Soal</button>
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
	
<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/chart.min.js"></script>
	<script src="../js/chart-data.js"></script>
	<script src="../js/easypiechart.js"></script>
	<script src="../js/easypiechart-data.js"></script>
	<script src="../js/bootstrap-datepicker.js"></script>
	<script src="../js/custom.js"></script>
	<script>
		<?php 
			if($row['kategori']=='2') echo'document.getElementById("mygambar").style.display = "none";';
			else echo'document.getElementById("myaudio").style.display = "none";';
		?>		
	</script>
</body>
</html>
