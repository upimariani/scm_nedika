<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Invoice</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Invoice</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="callout callout-info">
						<h5><i class="fas fa-info"></i> Note:</h5>
						This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
					</div>
					<!-- Main content -->
					<div class="invoice p-3 mb-3">
						<!-- title row -->
						<div class="row">
							<div class="col-12">
								<h4>
									<i class="fas fa-globe"></i> AdminLTE, Inc.
									<small class="float-right">Date: <?= date('Y-m-d') ?></small>
								</h4>
							</div>
							<!-- /.col -->
						</div>
						<div class="row">
							<div class="col-12 table-responsive">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>Id Transaksi</th>
											<th>Tanggal Transaksi</th>
											<th>Produk</th>
											<th>Sub Total per Produk</th>
										</tr>
										<?php
										$total = 0;
										foreach ($laporan as $key => $value) {
											$total += $value->harga_bb * $value->qty;
										?>

											<tr>
												<td><?= $value->id_po_bb ?></td>
												<td><?= $value->tgl_transaksi ?></td>
												<td><?= $value->nama_bb ?></td>
												<td>Rp. <?= number_format($value->harga_bb * $value->qty) ?></td>

											</tr>
										<?php
										}
										?>
									</thead>
									<tbody>
										<tr>

											<th>&nbsp;</th>
											<th>&nbsp;</th>
											<th>
												<h3>Total</h3>
											</th>
											<th class="text-right">
												<h3>Rp. <?= number_format($total) ?></h3>
											</th>
										</tr>
									</tbody>
								</table>
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
						<!-- this row will not appear when printing -->
						<div class="row no-print">
							<div class="col-12">
								<button type="button" onclick="window.print()" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
							</div>
						</div>
					</div>
					<!-- /.invoice -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>