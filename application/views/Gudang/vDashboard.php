<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Dashboard Admin</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-6 col-6">
					<!-- small box -->
					<?php
					$user = $this->db->query("SELECT COUNT(id_user) as tot_user FROM `user`;")->row();
					$supplier = $this->db->query("SELECT COUNT(id_supplier) as tot_suplier FROM `supplier`;")->row();
					?>
					<div class="small-box bg-info">
						<div class="inner">
							<h3><?= $user->tot_user ?></h3>

							<p>Data User</p>
						</div>
						<div class="icon">
							<i class="ion ion-bag"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-6 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
							<h3><?= $supplier->tot_suplier ?><sup style="font-size: 20px"></sup></h3>

							<p>Data Supplier</p>
						</div>
						<div class="icon">
							<i class="ion ion-stats-bars"></i>
						</div>
						<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->

				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Bahan Baku</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama Bahan Baku</th>
										<th>Stok</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($stok_bb as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?>.</td>
											<td><?= $value->nama_bb ?></td>
											<td><?= $value->qty ?></td>
											<td><?php if ($value->qty <= 100) {
												?>
													<span class="badge badge-warning">Bahan Baku Akan Segera Habis!</span>
												<?php
												} else if ($value->qty == '0') {
												?>
													<span class="badge badge-danger">Stok Bahan Baku Habis!</span>
												<?php
												} else {
												?>
													<span class="badge badge-success">Stok Bahan Baku Aman!</span>
												<?php
												} ?>
											</td>

										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Nama Bahan Baku</th>
										<th>Stok</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
			</div>
			<!-- /.row -->
			<!-- Main row -->

			<!-- /.row (main row) -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>