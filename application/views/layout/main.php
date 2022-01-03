<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>POS</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('layout/header')?>

</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
	<!-- Navbar -->
	<nav class="main-header navbar navbar-expand navbar-blue navbar-light">
		<!-- Left navbar links -->
		<ul class="navbar-nav">
			<li class="nav-item">
				<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
			</li>
		</ul>


		<!-- Right navbar links -->
		<ul class="navbar-nav ml-auto">
			<!-- Messages Dropdown Menu -->

			<!-- Notifications Dropdown Menu -->
			<li class="nav-item dropdown">
				<a class="nav-link"  data-toggle="dropdown">

					<i class="far fa-user"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
					<div class="dropdown-divider"></div>
					<a href="<?= base_url('login/logout')?>" class="dropdown-item">
						<i class="fas fa-sign-out-alt mr-2"></i> Log Out
					</a>
				</div>
			</li>
		</ul>
	</nav>
	<!-- /.navbar -->
	<?php $this->load->view('layout/sidemenu')?>

	<!-- Main Sidebar Container -->

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<?php $this->load->view($page)?>


		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php $this->load->view('layout/footer')?>



</body>
</html>
