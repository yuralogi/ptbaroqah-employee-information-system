  <!-- Meta -->
  <?php $this->load->view('admin/template/meta') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/template/sidebar') ?>

  <!-- Navbar -->
  <?php $this->load->view('admin/template/navbar') ?>

  <!-- Navbar Second-->
  <?php $this->load->view('admin/template/navbarsecond') ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
          <h1 class="h3 text-gray-800">Dashboard</h1>

          <!-- <?php if ($this->session->userdata('role_user') == 'admin') : ?>
          <a href="<?php echo base_url('admin/cetaklaporan')?>" target="_blank"
              class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                  class="fas fa-download fa-sm text-white-50"></i> Generate Report (PDF)</a>
          <?php endif; ?> -->
      </div>


      <!-- Content Row -->
      <div class="row">

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?php echo $jabatan_manager ?></div>
                              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Manager</div>

                          </div>
                          <div class="col-auto">
                              <i class="fas fa-users fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jabatan_supervisor ?>
                              </div>
                              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                  Supervisor</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Earnings (Monthly) Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">

                              <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $jabatan_staff ?>
                              </div>
                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Staff
                              </div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-people-carry fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <!-- Pending Requests Card Example -->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                  <div class="card-body">
                      <div class="row no-gutters align-items-center">
                          <div class="col mr-2">

                              <div class="h5 mb-0 font-weight-bold text-gray-800">
                                  <?php echo $jabatan_manager + $jabatan_supervisor + $jabatan_staff ?>
                              </div>
                              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                  Total Karyawan</div>
                          </div>
                          <div class="col-auto">
                              <i class="fas fa-user-check fa-2x text-gray-300"></i>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

      </div>
      <!-- Content Row -->

  </div>
  <!-- /.container-fluid -->


  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

  <!-- JS -->
  <?php $this->load->view('admin/template/js') ?>