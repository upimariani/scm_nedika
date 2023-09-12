<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Kategori Barang</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Kategori</li>
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
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Update Data Kategori Barang</h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form action="<?= base_url('Admin/cKategori/edit/' . $kategori->id_kategori) ?>" method="POST" role="form">
							<div class="card-body">
								<div class="row">
									<div class="col-lg-12">
										<div class="form-group">
											<label for="exampleInputEmail1">Nama kategori</label>
											<input type="text" value="<?= $kategori->nama_kategori ?>" name="nama" class="form-control" id="exampleInputEmail1" placeholder="Masukkan nama kategori">
											<?= form_error('nama', '<small class="text-danger">', '</small>') ?>
										</div>
									</div>
								</div>
							</div>
							<!-- /.card-body -->
							<div class="card-footer">
								<button type="submit" class="btn btn-primary">Save</button>
								<a href="<?= base_url('Admin/ckategori') ?>" class="btn btn-danger">Kembali</a>
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