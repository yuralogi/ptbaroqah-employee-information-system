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
      <h1 class="h3 mb-2 ml-3 text-gray-800">Edit Data Karyawan</h1>
      <p class="mb-0 ml-3">Silahkan Edit Data Karyawan</p>
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>
      <?php foreach($data_edit as $value) : ?>
      <form class="needs-validation" role="form" method="POST"
          action="<?php echo base_url() . 'admin/karyawan/updatedatakaryawan'; ?>" novalidate>
          <div class="card-body">
              <div class="for-group">
                  <input type="hidden" name="id_karyawan" class="form-control"
                      value="<?php echo $value->id_karyawan ?>">
              </div>

              <div class="form-group">
                  <label for="namaKaryawan">Nama Karyawan</label>
                  <input type="text" class="form-control" id="namaKaryawan" name="namaKaryawan"
                      value="<?php echo $value->nama_karyawan ?>" placeholder="" required>
                  <div class="invalid-feedback">
                      Nama Karyawan Wajib di isi
                  </div>
              </div>
              <div class="form-group">
                  <label for="namaKaryawan">NIK Karyawan</label>
                  <input type="text" class="form-control" id="nikKaryawan" name="nikKaryawan"
                      value="<?php echo $value->nik_karyawan ?>" placeholder="" required>
                  <div class="invalid-feedback">
                      NIK Karyawan Wajib di isi
                  </div>
              </div>
              <div class="form-group">
                  <label for="tlpKaryawan">No Tlp Karyawan</label>
                  <input type="number" class="form-control" id="tlpKaryawan" name="tlpKaryawan"
                      value="<?php echo $value->no_tlp ?>" placeholder="" required>
                  <div class="invalid-feedback">
                      No Telepon Wajib di isi
                  </div>
              </div>
              <div class="form-group">
                  <label for="alamatKaryawan">Alamat Karyawan</label>
                  <input type="text" class="form-control" id="alamatKaryawan" name="alamatKaryawan"
                      value="<?php echo $value->alamat_karyawan ?>" placeholder="" required>
                  <div class="invalid-feedback">
                      Alamat Karyawan Wajib di isi
                  </div>
              </div>
              <div class="form-group">
                  <label for="jabatanKaryawan">Jabatan</label>
                  <select class="custom-select" id="jabatanKaryawan" name="jabatanKaryawan" placeholder="Pilih Jabatan"
                      required>

                      <option value="<?php echo $value->jabatan_karyawan ?>" selected> -
                          <?php echo $value->jabatan_karyawan ?> - </option>
                      <option value="Manager">Manager</option>
                      <option value="Supervisor">Supervisor</option>
                      <option value="Staff">Staff</option>
                  </select>

                  <div class="invalid-feedback">
                      Jabatan Wajib diisi
                  </div>
              </div>

              <div class="form-group">
                  <label for="gajiKaryawan">Nominal Gaji</label>
                  <input type="text" class="form-control nominal-rupiah" id="gajiKaryawan" name="gajiKaryawan"
                      value="<?php echo  number_format($value->gaji_pokok, 2,',','.') ?>" placeholder="" required>
                  <div class="invalid-feedback">
                      Nominal Gaji Wajib di isi
                  </div>
              </div>

              <button type="submit" class="btn btn-primary ml-3 mb-3 float-right ">Update</button>
              <!-- <button type=" button" class="btn btn-warning float-right">Kosongkan</button> -->

          </div>
          <!-- /.card-body -->
      </form>

      <?php endforeach; ?>

  </div>
  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

  <!-- JS -->
  <?php $this->load->view('admin/template/js') ?>