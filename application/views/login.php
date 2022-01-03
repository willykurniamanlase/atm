<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi Peminjaman ATK dan Mobil | Log in </title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?=base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
	<!-- /.login-logo -->
	<div class="card card-outline card-primary">
		<div class="card-header text-center">
			<a class="h1">Aplikasi Peminjaman ATK dan Mobil </a>
		</div>
		<div class="card-body">
			<p class="login-box-msg">Silahkan Login untuk Menggunakan Aplikasi</p>

			<?php if ($this->session->flashdata('success')) : ?>
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('success') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php elseif($this->session->flashdata('error')) : ?>
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<?= $this->session->flashdata('error') ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif ?>
			<form action="<?=base_url('login/prosesLogin')?>" method="post">
				<div class="input-group mb-3">
					<input type="text" name="username" class="form-control" placeholder="Masukkan Username">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-user"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" name="password" class="form-control" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-8">

					</div>
					<!-- /.col -->
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block" name="login">Login</button>
					</div>
					<!-- /.col -->
				</div>
			</form>
		</div>
		<!-- /.card-body -->
	</div>
	<!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url()?>assets/js/adminlte.min.js"></script>
</body>
</html>
