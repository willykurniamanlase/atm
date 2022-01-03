<p></p>
<div id="content-wrapper" class="d-flex flex-column">
	<div id="content" data-url="<?= base_url('dashboard') ?>">
		<div class="container-fluid">
			<div class="clearfix">
				<div class="float-left">
					<p></p>
					<div class="row no-gutters align-items-center">
						<h3> Hai <strong></strong>, Selamat Datang</h3>
					</div>
				</div>
			</div>
			<hr>
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


			<div class="row">
				<!-- Pending Requests Card Example -->
				<!-- Small boxes (Stat box) -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<p class="text-bold">Jumlah Admin</p>
							<h3></h3>
						</div>
						<div class="icon">
							<i class="fa fa-user fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<p class="text-bold" > Jumlah Kasir</p>
							<h3></h3>
						</div>
						<div class="icon">
							<i class="fa fa-users fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<p class="text-bold" > Jumlah Barang</p>
							<h3></h3>
						</div>
						<div class="icon">
							<i class="fa fa-boxes fa-3x"></i>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
							<p class="text-bold" > Jumlah Transaksi</p>
							<h3></h3>
						</div>
						<div class="icon">
							<i class="fa fa-credit-card fa-3x"></i>
						</div>
					</div>
				</div>

			</div>


		</div>

	</div>




</div>


