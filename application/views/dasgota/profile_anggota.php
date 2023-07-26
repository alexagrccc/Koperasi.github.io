<!DOCTYPE html>
<html>
<?php $this->load->view("admin/_includes/head.php") ?>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Profile.css">
    <?php $this->load->view("admin/_includes/head.php") ?>
  <title></title>

  <style>
    /* Add padding to all <td> elements in the table */
    table.bio-table td {
      padding: 4px;
      padding-left: 15px;
    }

    #img-circle {
        padding: 5px;
        padding-top: 50px;
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
              <p><center><?php echo $this->session->userdata('email'); ?></center></p>
              
          </div>

          <ul class="nav nav-pills nav-stacked">
              <li class="active"><a href="#"> <i class="fa fa-user"></i> Profile</a></li>
              <li><a href="#"> <i class="fa fa-edit"></i> Edit profile</a></li>
          </ul>
      </div>
  </div>
  <div class="profile-info col-md-9">
      
      <div class="panel">
          

          <div class="panel-body bio-graph-info">
              <h1><b>Profile</b></h1>
              <div class="row">
    <table class="bio-table">
        <tr class="bio-row">
            <td><span>Nama lengkap</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('nama'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Alamat</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('alamat'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Birthday</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('birthday'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>Occupation</span></td>
            <td> : </td>
            <td>UI Designer</td>
        </tr>
        <tr class="bio-row">
            <td><span>Email</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('email'); ?></td>
        </tr>
        <tr class="bio-row">
            <td><span>No telp</span></td>
            <td> : </td>
            <td><?php echo $this->session->userdata('nohp'); ?></td>
        </tr>
    </table>

              </div>
          </div>
      </div>
      <div>
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="35" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="red">Envato Website</h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="63" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="terques">ThemeForest CMS </h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="75" data-fgcolor="#96be4b" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="green">VectorLab Portfolio</h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="50" data-fgcolor="#cba4db" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="purple">Adobe Muse Template</h4>
                              <p>Started : 15 July</p>
                              <p>Deadline : 15 August</p>
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
  <!-- /.content-wrapper -->s
<?php $this->load->view("admin/_includes/footer.php") ?>
<?php $this->load->view("admin/_includes/control_sidebar.php") ?>
<?php $this->load->view("admin/_includes/bottom_script.php") ?>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>







</body>
</html>