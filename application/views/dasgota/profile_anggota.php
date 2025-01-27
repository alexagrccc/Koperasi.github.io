<!DOCTYPE html>
<html>

<?php $this->load->view("admin/_includes/head.php") ?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Profile.css">
    <?php $this->load->view("admin/_includes/head.php") ?>
  <title>Koperasi Terserah</title>

  <style>
    /* Add padding to all <td> elements in the table */
    table.bio-table td {
      padding: 4px;
      padding-left: 15px;
      font-family: Arial, Helvetica, sans-serif;
      font-size: medium;
    }

    #img-circle {
        padding: 50px;
       
    }

    h3  {
    margin-left: 15px;
}
  </style>
</head>
<body>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<?php $this->load->view("admin/_includes/header.php") ?>
<?php $this->load->view("admin/_includes/sb_anggota.php") ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
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
    <!-- Content Header (Page header) -->
    <section class="content-header">

<div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#"><center>
              <img src="<?php echo base_url('assetAdmin/dist/img/user2-160x160.jpg')?> " class="img-circle" id="img-circle" alt="User Image">
              </a></center> 
              <h1><center><?php echo $this->session->userdata('username'); ?></center></h1>
              <p><center><?php echo $this->session->userdata('level'); ?></center></p>
              <br>
              
          </div>
         <div>
          <table class="bio-table" >
            <tr>
                <td class="active"><i class="fa fa-envelope"></i></a></td>
                <td><right><?php echo $this->session->userdata('email'); ?></right></td>
            </tr>
            <tr>
                <td><i class="fa fa-phone"></i></a></td>
                <td><right><?php echo $this->session->userdata('nohp'); ?></right></td>
            </tr>
          </table>
         </div>

      </div>

      <div class="panel">
          <div class="user-heading round">
              <h3>Registered</h3>
              <br>
              
          </div>
         <div>
          <table class="bio-table" >
            <tr>
                <td class="active"><i class="fa fa-calendar"></i></a></td>
                <td><right><?php echo $this->session->userdata('tanggal'); ?></right></td>
            </tr>
            
          </table>
         </div>

      </div>

  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          
          <div class="panel-body bio-graph-info">
              <h1><b>Profile</b></h1>
              <div class="row">
    <table class="bio-table">
    <tr class="bio-row">
            <td><span>NIK</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('nia'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Full name</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('nama'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Birthday</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('birthday'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Place of birth</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('tempat_lahir'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Gender</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('jenis_kelamin');?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Address</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('alamat'); ?></td>
        </tr>       
        
    </table>

             </div>
           </div>
          </div>
         <div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                          </div>
                              <div class="bio-desk">
                              <h4 class="terques">Tabungan Pokok</h4>
                              <p>Lorem</p>
                              <p>ipsum</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                          </div>
                          <div class="bio-desk">
                              <h4 class="terques">Qurban </h4>
                              <p>Lorem</p>
                              <p>ipsum</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                          </div>
                              <div class="bio-desk">
                              <h4 class="terques">Tabungan Pokok</h4>
                              <p>Lorem</p>
                              <p>ipsum</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                          </div>
                              <div class="bio-desk">
                              <h4 class="terques">Tabungan Pokok</h4>
                              <p>Lorem</p>
                              <p>ipsum</p>
                          </div>
                      </div>
                  </div>
              </div><div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                          </div>
                              <div class="bio-desk">
                              <h4 class="terques">Pinjaman</h4>
                              <p>Lorem</p>
                              <p>ipsum</p>
                          </div>
                      </div>
                  </div>
              </div><div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                          </div>
                              <div class="bio-desk">
                              <h4 class="terques">Angsuran</h4>
                              <p>Lorem</p>
                              <p>ipsum</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
</div>

</section>
    <!-- /.content -->
</div>
  <!-- /.content-wrapper -->
<?php $this->load->view("admin/_includes/footer.php") ?>
<?php $this->load->view("admin/_includes/control_sidebar.php") ?>
<?php $this->load->view("admin/_includes/bottom_script.php") ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>







</body>
</html>
