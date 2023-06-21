  <!-- Meta -->
  <?php $this->load->view('admin/template/meta') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/template/sidebar') ?>

  <!-- Navbar -->
  <?php $this->load->view('admin/template/navbar') ?>

  <!-- NavbarSecond -->
  <?php $this->load->view('admin/template/navbarsecond') ?>

  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h2 class=" mb-0 text-gray-800">Profile <?php echo $this->session->userdata('role_user')?></h2>
      </div>
      <div class="card mb-4 py-3 border-left-primary">
          <div class="card-body">
              <img class="img-profile rounded-circle"
                  src="<?php echo base_url('assets/sbadmin2-templating/')?>/img/undraw_profile.svg"
                  style="height: 150px">
          </div>
          <div class="card-body">
              <h4>Nama : <?php echo $this->session->userdata('name_user')?></h4>
              <h4>Username : <?php echo $this->session->userdata('username') ?></h4>
          </div>


      </div>

  </div>

  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

  <!-- JS -->
  <?php $this->load->view('admin/template/js') ?>