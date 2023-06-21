  <!-- Meta -->
  <?php $this->load->view('admin/template/meta') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/template/sidebar') ?>

  <!-- Navbar -->
  <?php $this->load->view('admin/template/navbar') ?>

  <!-- NavbarSecond -->
  <?php $this->load->view('admin/template/navbarsecond') ?>

  <!-- form start -->
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
      <h1 class="h3 mb-2 ml-3 text-gray-800">Buat Laporan & Rekap</h1>
      <p class="mb-0 ml-3 text-danger">*Pastikan bahwa data sudah siap untuk di rekap untuk per satu bulan </p>
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
      <form class="needs-validation" role="form" method="POST" action="<?php echo base_url() . 'admin/laporan'; ?>"
          novalidate>
          <div class="card-body">
              <div class="form-group">
                  <label>Pilih Bulan</label>
                  <input type="month" value="" class="form-control" id="bulan" name="bulan" placeholder="" required>
                  <div class="invalid-feedback">
                      Bulan Wajib Diisi
                  </div>
              </div>
              <button type="submit" class="btn btn-warning ml-3 float-right ">Rekap Ke Database</button>

          </div>
          <!-- /.card-body -->
      </form>

  </div>
  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

  <!-- JS -->
  <?php $this->load->view('admin/template/js') ?>