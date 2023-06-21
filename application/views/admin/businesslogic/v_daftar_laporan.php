  <!-- Meta -->
  <?php $this->load->view('admin/template/meta') ?>

  <!-- Main Sidebar Container -->
  <?php $this->load->view('admin/template/sidebar') ?>

  <!-- Navbar -->
  <?php $this->load->view('admin/template/navbar') ?>

  <!-- NavbarSecond -->
  <?php $this->load->view('admin/template/navbarsecond') ?>

  <!-- Begin Page Content -->
  <div class="container-fluid">
      <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash'); ?>"></div>

      <!-- Page Heading -->
      <h1 class="h3 mb-2 text-gray-800">Data Laporan Gaji</h1>


      <form id="selected-form" class="needs-validation" role="form" method="POST"
          action="<?php echo base_url() . 'admin/laporan/showdatarekap'; ?>" novalidate>
          <div class="form-group">
              <label>Pilih Bulan</label>
              <input type="month" value="" class="form-control" id="bulan" name="bulan" placeholder="test" required>
              <div class="invalid-feedback">
                  Bulan Wajib Diisi
              </div>
          </div>
          <div class="form-group">
              <label>Pilih Jabatan</label>
              <select class="custom-select" id="jabatanKaryawan" name="jabatanKaryawan" placeholder="Pilih Jabatan"
                  required>
                  <option selected></option>
                  <option value="Manager">Manager</option>
                  <option value="Supervisor">Supervisor</option>
                  <option value="Staff">Staff</option>
                  <option value="All-In">Manager, Supervisor, Staff</option>
              </select>

              <div class="invalid-feedback">
                  Jabatan Wajib diisi
              </div>
              <button type="submit" class="btn btn-primary mt-3">Submit</button>
              <?php if ($this->session->userdata('role_user') == 'admin') : ?>
              <button formtarget="_blank" formaction="<?php echo base_url() . 'admin/laporan/cetaklaporan'; ?>"
                  class="btn btn-danger mt-3">Cetak Pdf</button>
              <?php endif; ?>
              <hr>
          </div>

      </form>
      <!-- DataTales Example -->
      <div class=" card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="mt-0 font-weight-bold text-grey-800">Tabel Data</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nik</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>No Tlp</th>
                              <th>Jabatan</th>
                              <th>Gaji Pokok</th>
                              <th>Gaji Total</th>
                              <th>Bonus</th>
                              <th>PPh</th>
                              <th>Waktu Rekap</th>

                          </tr>
                      </thead>
                      <tfoot>
                          <tr>
                              <th>No</th>
                              <th>Nik</th>
                              <th>Nama</th>
                              <th>Alamat</th>
                              <th>No Tlp</th>
                              <th>Jabatan</th>
                              <th>Gaji Pokok</th>
                              <th>Gaji Total</th>
                              <th>Bonus</th>
                              <th>PPh</th>
                              <th>Waktu Rekap</th>

                          </tr>
                      </tfoot>
                      <tbody>
                          <?php $no = 1; foreach ($data_rekap as $value) :?>
                          <tr>
                              <td><?php echo $no ?></td>
                              <td><?php echo $value['nik_karyawan'] ?></td>
                              <td><?php echo $value['nama_karyawan'] ?></td>
                              <td><?php echo $value['alamat_karyawan'] ?></td>
                              <td>0<?php echo $value['no_tlp'] ?></td>
                              <td><?php echo $value['jabatan_karyawan'] ?></td>
                              <td><?php echo number_format($value['gaji_pokok'], 2,',','.')?>
                              </td>
                              <td><?php echo number_format($value['gaji_total'], 2,',','.')?></td>
                              <td><?php echo $data_bonus[$value['jabatan_karyawan']] ?> %</td>
                              <td><?php echo $data_bonus['PPh'] ?> %</td>
                              <td><?php echo date("F", mktime(0, 0, 0, substr($value['waktu_rekap'], -2), 10)) .' '. substr($value['waktu_rekap'], 0, -3)?>
                              </td>

                          </tr>
                          <?php $no++; endforeach; ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- /.container-fluid -->

  <!-- Footer -->
  <?php $this->load->view('admin/template/footer') ?>

  <!-- JS -->
  <?php $this->load->view('admin/template/js') ?>