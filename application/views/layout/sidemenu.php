<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a class="brand-link">
		<h3 class="text-center">ATM</h3>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="info">
				<a href="<?= base_url('dashboard') ?>" class="d-block fas fa-tachometer-alt"> Dashboard </a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-header text-bold">Data Master ATK</li>
				<li class="nav-item">
					<a href="<?= base_url('user') ?>" class="nav-link">
						<i class="nav-icon fas fa-users"></i>
						<p>Karyawan</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>" class="nav-link">
						<i class="nav-icon fas fa-boxes"></i>
						<p>Barang</p>
					</a>
				</li>

				<li class="nav-header text-bold">Data Master Mobil</li>
				<li class="nav-item">
					<a href="<?= base_url('mobil') ?>" class="nav-link">
						<i class="nav-icon fas fa-truck"></i>
						<p>Mobil</p>
					</a>
				</li>
				<li class="nav-header text-bold">Transaksi </li>
				<li class="nav-item">
					<a href="<?= base_url() ?>" class="nav-link">
						<i class="nav-icon fas fa-box"></i>
						<p>Transaksi Barang Masuk</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>" class="nav-link">
						<i class="nav-icon fas fa-boxes"></i>
						<p>Transaksi Barang Keluar</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>" class="nav-link">
						<i class="nav-icon fas fa-car"></i>
						<p>Transaksi Peminjaman Mobil</p>
					</a>
				</li>
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>