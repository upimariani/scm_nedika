<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Bahan Baku Keluar</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Bahan Baku Keluar</li>
					</ol>
				</div>

			</div>

		</div><!-- /.container-fluid -->
		<button type="button" data-toggle="modal" data-target="#modal-default" class="btn btn-app">
			<i class="fas fa-plus"></i> Tambah Bahan Baku Keluar
		</button>
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
	<div class="modal fade" id="modal-default">
		<div class="modal-dialog">
			<form action="<?= base_url('Gudang/cBbKeluar/bb_keluar') ?>" method="POST">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title">Bahan Baku Keluar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="col-lg-12">
							<div class="form-group">
								<label for="exampleInputEmail1">Bahan Baku</label>
								<select class="form-control" id="bb" name="bb" required>
									<option value="">---Pilih Bahan Baku---</option>
									<?php
									foreach ($bb as $key => $value) {
									?>
										<option data-stok="<?= $value->qty ?>" value="<?= $value->id_po_dbb ?>"><?= $value->nama_bb ?> | Tgl.Transaksi <strong><?= $value->tgl_transaksi ?></strong> | Stok <?= $value->qty ?></option>
									<?php
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Stok Tersedia</label>
								<input type="number" class="stok form-control" name="stok" readonly>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Quantity Bahan Baku Keluar</label>
								<input type="number" class="form-control" name="qty">
							</div>
						</div>
					</div>
					<div class="modal-footer justify-content-between">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-warning">Save changes</button>
					</div>
				</div>
			</form>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Informasi Bahan Baku Keluar</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal Transaksi</th>
										<th>Tanggal Keluar</th>
										<th>Nama Bahan Baku</th>
										<th>Quantity Keluar</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									foreach ($bb_keluar as $key => $value) {
									?>
										<tr>
											<td><?= $no++ ?></td>
											<td><?= $value->tgl_transaksi ?></td>
											<td><?= $value->tgl_keluar ?></td>
											<td><?= $value->nama_bb ?></td>
											<td><?= $value->qty_keluar ?></td>


											<td class="text-center"> <a href="<?= base_url('Gudang/cTransaksi/detail_transaksi/' . $value->id_bb_keluar) ?>" class="btn btn-app">
													<i class="fas fa-info"></i> Detail Transaksi
												</a> </td>
										</tr>
									<?php
									}
									?>
								</tbody>
								<tfoot>

									<tr>
										<th>No</th>
										<th>Tanggal Transaksi</th>
										<th>Tanggal Keluar</th>
										<th>Nama Bahan Baku</th>
										<th>Quantity Keluar</th>
										<th class="text-center">Action</th>
									</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.card-body -->
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