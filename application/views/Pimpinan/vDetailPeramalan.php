<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Detail Peramalan Per Periode</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Detail Peramalan</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Peramalan Bahan Baku</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 10px">#</th>
										<th>Periode</th>
										<th>Jumlah Permintaan</th>
										<th style="width: 40px">Peramalan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									$urutan = 1;
									foreach ($peramalan as $key => $value) {

									?>
										<tr>
											<td><?= $no++ ?>.</td>
											<td><?php
												if ($value->bulan == '1') {
													echo 'Januari';
												} else if ($value->bulan == '2') {
													echo 'Februari';
												} else if ($value->bulan == '3') {
													echo 'Maret';
												} else if ($value->bulan == '4') {
													echo 'April';
												} else if ($value->bulan == '5') {
													echo 'Mei';
												} else if ($value->bulan == '6') {
													echo 'Juni';
												} else if ($value->bulan == '7') {
													echo 'Juli';
												} else if ($value->bulan == '8') {
													echo 'Agustus';
												} else if ($value->bulan == '9') {
													echo 'September';
												} else if ($value->bulan == '10') {
													echo 'Oktober';
												} else if ($value->bulan == '11') {
													echo 'November';
												} else if ($value->bulan == '12') {
													echo 'Desember';
												}
												?></td>
											<td><?= $value->jumlah ?></td>


											<?php
											$forecast = $this->db->query("SELECT SUM(qty) as jumlah, tgl_transaksi, MONTH(tgl_transaksi) as bulan, bahan_baku.id_bb FROM `po_bb` JOIN po_dbb ON po_bb.id_po_bb=po_dbb.id_po_bb JOIN bahan_baku ON bahan_baku.id_bb = po_dbb.id_bb WHERE bahan_baku.id_bb='$value->id_bb' AND MONTH(tgl_transaksi) < $value->bulan GROUP BY MONTH(tgl_transaksi), bahan_baku.id_bb ORDER BY MONTH(tgl_transaksi) DESC LIMIT 3")->result();
											$total = 0;
											foreach ($forecast as $key => $value) {
												$total += $value->jumlah;
											}

											$hasil = round($total / 3, 2);
											?>
											<td><span class="badge bg-danger"><?= $hasil ?></span></td>


										</tr>
									<?php
									}
									?>


								</tbody>
							</table>
						</div>
						<!-- /.card-body -->

					</div>
					<!-- /.card -->
				</div>
				<div class="col-md-6">
					<div class="card">
						<div class="card-body">
							<canvas id="grafik" height="150"></canvas>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /.content -->
</div>