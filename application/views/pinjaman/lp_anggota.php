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
        <small>Data Pinjaman</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-fw fa-user-plus"></i> Pinjaman</a></li>
        <li><a href="#">Lihat Data Pinjaman</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="<?php echo base_url('Pinjaman_controller/list_anggota') ?>" class="btn btn-tosca"><i class="fa fa-fw fa-plus"></i>Tambah</a>
              <button class="btn btn-carot"><i class="fa fa-fw fa-download"></i>Export Data</button>
              <button class="btn btn-ijo"><i class="fa fa-fw fa-upload"></i>Import Data</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Peminjam</th>
                      <th>No Pinjaman</th>
                      <th>Jumlah Pinjaman</th>
                      <th>Tanggal Peminjaman</th>
                      <th>Lama</th>
                      <th>Total Bunga</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;?>
                    <?php foreach ($pinjaman as $value): ?>
                      <tr>
                        <td><?php cetak($no++) ?></td>
                         <td><?php cetak($value->nama)  ?></td>
                        <td><?php cetak($value->no_pinjaman)  ?></td>
                        <td><?php echo "Rp. " . (number_format($value->jumlah_pinjaman,2,',','.')) ?></td>
                        <td><?php cetak($value->tanggal_pinjaman)  ?></td>
                        <td><?php cetak($value->lama)  ?></td>
                        <td><?php echo ($value->bunga)."%"  ?></td>
                        <td>
                          <a class="btn btn-ref" href="<?php echo site_url('Pinjaman_controller/edit/'.$value->id_pinjaman) ?>"><i class="fa fa-fw fa-edit"></i></a>
                          <a href="#!" onclick="deleteConfirm('<?php echo site_url('Pinjaman_controller/delete/'.$value->id_pinjaman) ?>')" class="btn btn-mandarin"><i class="fa fa-fw fa-trash"></i></a>
                          
                        </td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Nama Peminjam</th>
                      <th>No Pinjaman</th>
                      <th>Jumlah Pinjaman</th>
                      <th>Tanggal Peminjaman</th>
                      <th>Lama</th>
                      <th>Total Bunga</th>
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
 <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>
</body>
</html>
