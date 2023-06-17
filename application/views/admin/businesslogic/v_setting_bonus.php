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
      <h1 class="h3 mb-2 ml-3 text-gray-800">Edit Bonus</h1>
      <p class="mb-0 ml-3">Atur Besaran Bonus Dalam Persentase %</p>
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
      <form class="needs-validation" role="form" method="POST" action="<?php echo base_url() . 'admin/settingbonus'; ?>"
          novalidate>
          <div class="card-body">
              <div class="form-group">
                  <label for="bonusManager">Bonus Manager</label>
                  <input type="number" max-length="3" class="form-control percent-bonus" id="bonusManager"
                      name="bonusManager" value="<?php echo $data_bonus['Manager']?>" placeholder="" max='100' required>
                  <div class=" invalid-feedback">
                      Bonus Manager Wajib diisi
                  </div>
              </div>
              <div class="form-group">
                  <label for="bonusSupervisor">Bonus Supervisor</label>
                  <input type="number" value="<?php echo $data_bonus['Supervisor']?>" class="form-control percent-bonus"
                      id="bonusSupervisor" name="bonusSupervisor" placeholder="" required>
                  <div class="invalid-feedback">
                      Bonus Supervisor Wajib diisi
                  </div>
              </div>
              <div class="form-group">
                  <label for="bonusStaff">Bonus Staff</label>
                  <input type="number" class="form-control percent-bonus" id="bonusStaff" name="bonusStaff"
                      placeholder="" value="<?php echo $data_bonus['Staff']?>" required>
                  <div class="invalid-feedback">
                      Bonus Staff Wajib diisi
                  </div>
              </div>
              <div class="form-group">
                  <label for="pph">PPh</label>
                  <input type="number" class="form-control percent-bonus" id="pph" name="pph"
                      value="<?php echo $data_bonus['PPh']?>" placeholder="" required>
                  <div class="invalid-feedback">
                      PPh Wajib diisi
                  </div>
              </div>


              <button type="submit" class="btn btn-primary ml-3 float-right ">Update</button>
              <!-- <button type=" button" class="btn btn-warning float-right">Kosongkan</button> -->

          </div>
          <!-- /.card-body -->
      </form>

  </div>
  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

  <!-- JS -->
  <?php $this->load->view('admin/template/js') ?>