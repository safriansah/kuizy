<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Kuizy</span>Admin</a>
				
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOyNEdJYAO5Uilr8-ko3fF02yrzXsyVnLhDurj0Cu4nEDjWcW14w" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"><a href="https://kuizy.000webhostapp.com/profile"><?php echo $_SESSION['username']; ?></a></div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
		    <li class="<?php if($_GET['pg']==0) echo"active"; ?>"><a href="http://localhost/kuizy/main"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?php if($_GET['pg']==1) echo"active"; ?>"><a href="http://localhost/kuizy/soal"><em class="fa fa-book">&nbsp;</em> Bank Soal</a></li>
			<li class="<?php if($_GET['pg']==2) echo"active"; ?>"><a href="http://localhost/kuizy/tambahsoal"><em class="fa fa-pencil">&nbsp;</em> Tambah Soal</a></li>
			<li class="<?php if($_GET['pg']==3) echo"active"; ?>"><a href="http://localhost/kuizy/user"><em class="fa fa-user">&nbsp;</em> User</a></li>
			<!--<li class="<?php if($_GET['pg']==4) echo"active"; ?>"><a href="https://kuizy.000webhostapp.com/tambahuser"><em class="fa fa-user-plus">&nbsp;</em> Tambah User</a></li>-->
			<li class="<?php if($_GET['pg']==5) echo"active"; ?>"><a href="http://localhost/kuizy/leaderboard"><em class="fa fa-star">&nbsp;</em> Nilai</a></li>
			<li><a href="http://localhost/kuizy/logout"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
