<!-- Content wrapper -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Laporan Transaksi</h1>
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
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-12 table-responsive">
					<canvas id="laporan" height="100"></canvas>
				</div>
				<!-- /.col -->
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card card-light">
						<div class="card-header">
							<h3 class="card-title">Laporan Transaksi Harian</h3>
						</div>
						<div class="card-body">
							<?php
							echo form_open('Pimpinan/cLaporan_transaksi/lap_harian_transaksi') ?>
							<div class="row">
								<div class="col-sm-4">
									<div class="form-group">
										<label>Tanggal</label>
										<select name="tanggal" class="form-control">
											<?php
											$mulai = 1;
											for ($i = $mulai; $i < $mulai + 31; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Bulan</label>
										<select name="bulan" class="form-control">
											<?php
											$mulai = 1;
											for ($i = $mulai; $i < $mulai + 12; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$mulai = date('Y') - 1;
											for ($i = $mulai; $i < $mulai + 10; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
									</div>
								</div>
							</div>
							<?php
							echo form_close() ?>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="card card-light">
						<div class="card-header">
							<h3 class="card-title">Laporan Transaksi Bulanan</h3>
						</div>
						<div class="card-body">
							<?php
							echo form_open('Pimpinan/cLaporan_transaksi/lap_bulanan_transaksi') ?>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Bulan</label>
										<select name="bulan" class="form-control">
											<?php
											$mulai = 1;
											for ($i = $mulai; $i < $mulai + 12; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$mulai = date('Y') - 1;
											for ($i = $mulai; $i < $mulai + 10; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
									</div>
								</div>
							</div>
							<?php
							echo form_close() ?>
						</div>
					</div>
				</div>


				<div class="col-md-4">
					<div class="card card-light">
						<div class="card-header">
							<h3 class="card-title">Laporan Transaksi Tahunan</h3>
						</div>
						<div class="card-body">
							<?php
							echo form_open('Pimpinan/cLaporan_transaksi/lap_tahunan_transaksi') ?>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group">
										<label>Tahun</label>
										<select name="tahun" class="form-control">
											<?php
											$mulai = date('Y') - 1;
											for ($i = $mulai; $i < $mulai + 10; $i++) {
												$sel = $i == date('Y') ? 'selected="selected"' : '';
												echo '<option value="' . $i . '"' . $sel . '>' . $i . '</option>';
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group">
										<button type="submit" class="btn btn-info mt-3"><i class="fa fa-print"></i> View Laporan</button>
									</div>
								</div>
							</div>
							<?php
							echo form_close() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>