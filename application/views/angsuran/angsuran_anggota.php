<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_includes/head.php") ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

	<?php $this->load->view("admin/_includes/header.php") ?>
	<?php $this->load->view("admin/_includes/sb_anggota.php") ?>


	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->

		<!-- Alert -->
		<?php if ($this->session->flashdata('success')): ?>
			<div class="box-body">
				<div class="alert alert-info alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<h4><i class="icon fa fa-info"></i>Alert!</h4>
					<?php echo $this->session->flashdata('success'); ?>
				</div>
			</div>
		<?php endif; ?>
		<!-- Alert -->

		<section class="content-header">
			<h1>
				Kelola
				<small>Data Anggota Koperasi</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url('Pinjaman_controller') ?>"><i class="fa fa-fw fa-money"></i> Lihat
						Pinjaman</a></li>
				<li><a href="#">Data Anggota</a></li>
			</ol>
		</section>


		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<!--  -->
						<!-- /.box-header -->
						<div class="box-body table-responsive">
							<table id="example1" class="table table-bordered table-hover">
								<thead>
								<tr>
									<th>No</th>
									<th>NIK</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
								</thead>
								<tbody>
								<?php $no = 1; ?>
								<?php foreach ($anggota as $value): ?>
									<tr>
										<td><?php cetak($no++) ?></td>
										<td><?php cetak($value->nia) ?></td>
										<td><?php cetak($value->nama) ?></td>
										<td><?php cetak($value->jenis_kelamin) ?></td>
										<td><?php cetak($value->alamat) ?></td>
										<td>
											<a class="btn btn-primary"
											   href="<?php echo site_url('Angsuran_controller/detailAngsuran/' . $value->id_anggota) ?>">
												<i class="fa fa-fw fa-plus"></i>Detail Angsuran</a>
										</td>
									</tr>
								<?php endforeach; ?>
								</tbody>
								<tfoot>
								<tr>
									<th>No</th>
									<th>NIK</th>
									<th>Nama</th>
									<th>Jenis Kelamin</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
								</tfoot>
							</table>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->
	<?php $this->load->view("admin/_includes/footer.php") ?>
	<?php $this->load->view("admin/_includes/control_sidebar.php") ?>
	<!-- Add the sidebar's background. This div must be placed
     immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>
</div>

<!-- Logout Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	 aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
				<a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
			</div>
		</div>
	</div>
</div>
<!-- ./wrapper -->
<?php $this->load->view("admin/_includes/bottom_script_view.php") ?>
<!-- page script -->
<script>
	function deleteConfirm(url) {
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>
</body>
</html>
