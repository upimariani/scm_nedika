<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Transaksi Bahan Baku Supplier</h1>

				</div>

				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Transaksi</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->

		<?php
		if ($this->session->userdata('success')) {
		?>
			<div class="callout callout-success">
				<h5>Sukses!</h5>
				<p><?= $this->session->userdata('success') ?></p>
			</div>
		<?php
		}
		?>

	</section>

	<!-- /.modal -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Transaksi Supplier</h3>
						</div>
						<div class="card-body">
							<ul class="nav nav-tabs" id="custom-content-above-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="custom-content-above-home-tab" data-toggle="pill" href="#custom-content-above-home" role="tab" aria-controls="custom-content-above-home" aria-selected="true">Pesanan Belum Bayar</a>
								</li>
								<?php
								$id_supplier = $this->session->userdata('id');
								$notif_transaksi = $this->db->query("SELECT COUNT(id_po_bb) as jml FROM `po_bb` WHERE status_order = '1' AND id_supplier ='" . $id_supplier . "'")->row();
								?>
								<li class="nav-item">
									<a class="nav-link" id="custom-content-above-profile-tab" data-toggle="pill" href="#custom-content-above-profile" role="tab" aria-controls="custom-content-above-profile" aria-selected="false">Pesanan <?php if ($notif_transaksi->jml != '0') {
																																																											?>
											<span class="badge badge-warning">Konfirmasi <?= $notif_transaksi->jml ?></span>
										<?php
																																																											} ?> </a>
								</li>

							</ul>
							<div class="tab-custom-content">
								<p class="lead mb-0">Custom Content goes here</p>
							</div>
							<div class="tab-content" id="custom-content-above-tabContent">
								<div class="tab-pane fade show active" id="custom-content-above-home" role="tabpanel" aria-labelledby="custom-content-above-home-tab">
									<table id="example1" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal Transaksi</th>
												<th>Total Bayar</th>
												<th>Alamat Pengiriman</th>
												<th>Status Pesanan</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($transaksi as $key => $value) {
												if ($value->stat_bayar == '0') {

											?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?= $value->tgl_transaksi ?></td>
														<td>Rp. <?= number_format($value->total_bayar)  ?></td>
														<td><?= $value->alamat_pengiriman ?></td>
														<td><?php
															if ($value->status_order == '0') {
															?>
																<span class="badge badge-danger">Belum Bayar</span>
															<?php
															} else if ($value->status_order == '1') {
															?>
																<span class="badge badge-warning">Menunggu Konfirmasi</span>
															<?php
															} else if ($value->status_order == '2') {
															?>
																<span class="badge badge-info">Pesanan Diproses</span>
															<?php
															} else if ($value->status_order == '3') {
															?>
																<span class="badge badge-primary">Pesanan Dikirim</span>
															<?php
															} else if ($value->status_order == '4') {
															?>
																<span class="badge badge-success">Selesai</span>
															<?php
															} else if ($value->status_order == '9') {
															?>
																<span class="badge badge-danger">Pesanan Ditolak</span>
															<?php
															}
															?>
														</td>
														<?php
														if ($value->status_order == '9') {
														?>
															<td class="text-center">

																<a href="<?= base_url('Supplier/cTransaksi/hapus_transaksi/' . $value->id_po_bb) ?>" class="btn btn-app btn-danger">
																	<i class="fas fa-exclamation"></i> Hapus History
																</a>
															</td>
														<?php
														} else {
														?>
															<td class="text-center">
																<a href="<?= base_url('Supplier/cTransaksi/detail_transaksi/' . $value->id_po_bb) ?>" class="btn btn-app">
																	<i class="fas fa-info"></i> Detail Transaksi
																</a>
																<a href="<?= base_url('Supplier/cTransaksi/tolak_pesanan/' . $value->id_po_bb) ?>" class="btn btn-app btn-danger">
																	<i class="fas fa-exclamation"></i> Tolak Pesanan
																</a>
															</td>
														<?php
														}
														?>

													</tr>
											<?php
												}
											}
											?>
										</tbody>
										<tfoot>

											<tr>
												<th>No</th>
												<th>Tanggal Transaksi</th>
												<th>Total Bayar</th>
												<th>Alamat Pengiriman</th>
												<th>Status Pesanan</th>
												<th class="text-center">Action</th>
											</tr>
										</tfoot>
									</table>
								</div>
								<div class="tab-pane fade" id="custom-content-above-profile" role="tabpanel" aria-labelledby="custom-content-above-profile-tab">
									<table id="example2" class="table table-bordered table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Tanggal Transaksi</th>
												<th>Total Bayar</th>
												<th>Alamat Pengiriman</th>
												<th>Status Pesanan</th>
												<th class="text-center">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$no = 1;
											foreach ($transaksi as $key => $value) {
												if ($value->stat_bayar != '0') {

											?>
													<tr>
														<td><?= $no++ ?></td>
														<td><?= $value->tgl_transaksi ?></td>
														<td>Rp. <?= number_format($value->total_bayar)  ?></td>
														<td><?= $value->alamat_pengiriman ?></td>
														<td><?php
															if ($value->status_order == '0') {
															?>
																<span class="badge badge-danger">Belum Bayar</span>
															<?php
															} else if ($value->status_order == '1') {
															?>
																<span class="badge badge-warning">Menunggu Konfirmasi</span>
															<?php
															} else if ($value->status_order == '2') {
															?>
																<span class="badge badge-info">Pesanan Diproses</span>
															<?php
															} else if ($value->status_order == '3') {
															?>
																<span class="badge badge-primary">Pesanan Dikirim</span>
															<?php
															} else if ($value->status_order == '4') {
															?>
																<span class="badge badge-success">Selesai</span>
															<?php
															}
															?>
														</td>

														<td class="text-center"> <a href="<?= base_url('Supplier/cTransaksi/detail_transaksi/' . $value->id_po_bb) ?>" class="btn btn-app">
																<i class="fas fa-info"></i> Detail Transaksi
															</a> </td>
													</tr>
											<?php
												}
											}
											?>
										</tbody>
										<tfoot>

											<tr>
												<th>No</th>
												<th>Tanggal Transaksi</th>
												<th>Total Bayar</th>
												<th>Alamat Pengiriman</th>
												<th>Status Pesanan</th>
												<th class="text-center">Action</th>
											</tr>
										</tfoot>
									</table>
								</div>

							</div>

						</div>
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>