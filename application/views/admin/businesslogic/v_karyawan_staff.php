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
      <h1 class="h3 mb-2 text-gray-800">Tabel Staff</h1>
      <p class="mb-4">Dibawah ini merupakan data dari Staff</p>
      <!-- DataTales Example -->
      <div class="card shadow mb-4">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-grey-800">Tabel Data Staff </h6>
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
                              <th>Aksi</th>
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
                              <th>Aksi</th>
                          </tr>
                      </tfoot>
                      <tbody>
                          <?php $no = 1; foreach ($data_staff as $value) :?>
                          <tr>
                              <?php
                                $bonus = $data_bonus[$value['jabatan_karyawan']] / 100 * $value['gaji_pokok']; 
                                $pph = $data_bonus['PPh'] / 100 * $value['gaji_pokok'];
                                $gaji_total = $value['gaji_pokok'] + $bonus - $pph
                            ?>
                              <td><?php echo $no ?></td>
                              <td><?php echo $value['nik_karyawan'] ?></td>
                              <td><?php echo $value['nama_karyawan'] ?></td>
                              <td><?php echo $value['alamat_karyawan'] ?></td>
                              <td>0<?php echo $value['no_tlp'] ?></td>
                              <td><?php echo $value['jabatan_karyawan'] ?></td>
                              <td><?php echo number_format($value['gaji_pokok'], 2,',','.')?>
                              </td>
                              <td><?php echo number_format($gaji_total, 2,',','.')?></td>
                              <td><?php echo anchor('admin/karyawan/editkaryawan/' . $value['id_karyawan'], '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
                                  <?php echo anchor('admin/karyawan/deletekaryawan/' .$value['id_karyawan'],'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
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