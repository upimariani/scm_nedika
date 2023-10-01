<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Bahan Baku</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Bahan Baku</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="card card-info">
						<div class="card-header">
							<h3 class="card-title">Tambah Data Bahan Baku</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<?php echo form_open_multipart('Supplier/cBarang/create'); ?>
						<div class="card-body">
							<div class="row">

								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputEmail1">Nama Bahan Baku</label>
										<input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Bahan Baku">
										<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="exampleInputPassword1">Harga Bahan Baku</label>
										<input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Harga Bahan Baku">
										<?= form_error('harga', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
							</div>


							<div class="form-group">
								<label for="exampleInputEmail1">Deskripsi</label>
								<textarea type="text" name="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Deskripsi Bahan Baku"></textarea>
								<?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Stok</label>
										<input type="number" name="stok" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Stok Bahan Baku">
										<?= form_error('stok', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label for="exampleInputEmail1">Keterangan Satuan</label>
										<input type="text" name="satuan" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Satuan Bahan Baku">
										<?= form_error('satuan', '<small class="text-danger">', '</small>') ?>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-body -->

						<div class="card-footer">
							<button type="submit" class="btn btn-info"><i class="far fa-save"></i> Save</button>
							<a href="<?= base_url('Supplier/cBarang') ?>" class="btn btn-danger"><i class="fas fa-backward"></i> Kembali</a>
						</div>
						</form>
					</div>
					<!-- /.card -->
				</div>
				<!--/.col (right) -->
			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>