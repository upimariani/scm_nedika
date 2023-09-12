  <!-- /.content-wrapper -->
  <footer class="main-footer">
  	<strong>CV. SURYA NEDIKA ISABELLA</strong>


  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  	<!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
  	$.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/moment/moment.min.js"></script>
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="<?= base_url('asset/AdminLTE/') ?>dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
  <!-- DataTables -->
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?= base_url('asset/AdminLTE/') ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?= base_url('asset/AdminLTE/') ?>dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?= base_url('asset/AdminLTE/') ?>dist/js/demo.js"></script>
  <!-- page script -->
  <script>
  	$(function() {
  		$("#example1").DataTable({
  			"responsive": true,
  			"autoWidth": false,
  		});
  		$('#example2').DataTable({
  			"paging": true,
  			"lengthChange": false,
  			"searching": false,
  			"ordering": true,
  			"info": true,
  			"autoWidth": false,
  			"responsive": true,
  		});
  	});
  </script>
  <script src="<?= base_url('asset/chart/js_chart.js') ?>"></script>
  <script>
  	<?php
		foreach ($peramalan as $key => $value) {

			if ($value->bulan == '1') {
				$thn[] = 'Januari';
			} else if ($value->bulan == '2') {
				$thn[] = 'Februari';
			} else if ($value->bulan == '3') {
				$thn[] = 'Maret';
			} else if ($value->bulan == '4') {
				$thn[] = 'April';
			} else if ($value->bulan == '5') {
				$thn[] = 'Mei';
			} else if ($value->bulan == '6') {
				$thn[] = 'Juni';
			} else if ($value->bulan == '7') {
				$thn[] = 'Juli';
			} else if ($value->bulan == '8') {
				$thn[] = 'Agustus';
			} else if ($value->bulan == '9') {
				$thn[] = 'September';
			} else if ($value->bulan == '10') {
				$thn[] = 'Oktober';
			} else if ($value->bulan == '11') {
				$thn[] = 'November';
			} else if ($value->bulan == '12') {
				$thn[] = 'Desember';
			}
			$forecast[] = $value->jumlah;
		}
		?>
  	var ctx = document.getElementById('grafik');
  	var grafik = new Chart(ctx, {
  		type: 'bar',
  		data: {
  			labels: <?= json_encode($thn) ?>,
  			datasets: [{
  				label: 'Grafik Analisis Permintaan',
  				data: <?= json_encode($forecast) ?>,
  				backgroundColor: [
  					'rgba(255, 99, 132, 0.80)',
  					'rgba(54, 162, 235, 0.80)',
  					'rgba(255, 206, 86, 0.80)',
  					'rgba(75, 192, 192, 0.80)',
  					'rgba(153, 102, 255, 0.80)',
  					'rgba(255, 159, 64, 0.80)',
  					'rgba(201, 76, 76, 0.3)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(0, 140, 162, 1)',
  					'rgba(158, 109, 8, 1)',
  					'rgba(201, 76, 76, 0.8)',
  					'rgba(0, 129, 212, 1)',
  					'rgba(201, 77, 201, 1)',
  					'rgba(255, 207, 207, 1)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(128, 98, 98, 1)',
  					'rgba(0, 0, 0, 1)',
  					'rgba(128, 128, 128, 1)',
  					'rgba(255, 99, 132, 0.80)',
  					'rgba(54, 162, 235, 0.80)',
  					'rgba(255, 206, 86, 0.80)',
  					'rgba(75, 192, 192, 0.80)',
  					'rgba(153, 102, 255, 0.80)',
  					'rgba(255, 159, 64, 0.80)',
  					'rgba(201, 76, 76, 0.3)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(0, 140, 162, 1)',
  					'rgba(158, 109, 8, 1)',
  					'rgba(201, 76, 76, 0.8)',
  					'rgba(0, 129, 212, 1)',
  					'rgba(201, 77, 201, 1)',
  					'rgba(255, 207, 207, 1)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(128, 98, 98, 1)',
  					'rgba(0, 0, 0, 1)',
  					'rgba(128, 128, 128, 1)'
  				],
  				borderColor: [
  					'rgba(255, 99, 132, 1)',
  					'rgba(54, 162, 235, 1)',
  					'rgba(255, 206, 86, 1)',
  					'rgba(75, 192, 192, 1)',
  					'rgba(153, 102, 255, 1)',
  					'rgba(255, 159, 64, 1)',
  					'rgba(201, 76, 76, 0.3)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(0, 140, 162, 1)',
  					'rgba(158, 109, 8, 1)',
  					'rgba(201, 76, 76, 0.8)',
  					'rgba(0, 129, 212, 1)',
  					'rgba(201, 77, 201, 1)',
  					'rgba(255, 207, 207, 1)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(128, 98, 98, 1)',
  					'rgba(0, 0, 0, 1)',
  					'rgba(128, 128, 128, 1)',
  					'rgba(255, 99, 132, 1)',
  					'rgba(54, 162, 235, 1)',
  					'rgba(255, 206, 86, 1)',
  					'rgba(75, 192, 192, 1)',
  					'rgba(153, 102, 255, 1)',
  					'rgba(255, 159, 64, 1)',
  					'rgba(201, 76, 76, 0.3)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(0, 140, 162, 1)',
  					'rgba(158, 109, 8, 1)',
  					'rgba(201, 76, 76, 0.8)',
  					'rgba(0, 129, 212, 1)',
  					'rgba(201, 77, 201, 1)',
  					'rgba(255, 207, 207, 1)',
  					'rgba(201, 77, 77, 1)',
  					'rgba(128, 98, 98, 1)',
  					'rgba(0, 0, 0, 1)',
  					'rgba(128, 128, 128, 1)'
  				],
  				fill: false,
  				borderWidth: 1
  			}]
  		},
  		options: {
  			scales: {
  				yAxes: [{
  					ticks: {
  						beginAtZero: true
  					}
  				}]
  			}
  		}
  	});
  </script>
  </body>

  </html>