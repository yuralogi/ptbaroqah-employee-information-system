 <!-- Meta -->
 <?php $this->load->view('admin/template/meta') ?>

 <!-- Main Sidebar Container -->
 <?php $this->load->view('admin/template/sidebar') ?>

 <!-- Navbar -->
 <?php $this->load->view('admin/template/navbar') ?>

 <!-- NavbarSecond -->
 <?php $this->load->view('admin/template/navbarsecond') ?>
 <!-- Modal -->
 <div class="modal fade" id="modalInputKaryawan" tabindex="-1" aria-labelledby="modalInputKaryawan" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Input Data Karyawan</h5>


                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <!-- form start -->
                 <form class="needs-validation" role="form" method="POST"
                     action="<?php echo base_url() . 'admin/DataKaryawan/inputDataMuzzaki'; ?>" novalidate>
                     <div class="card-body">
                         <div class="form-group">
                             <label for="namaKaryawan">Nama Karyawan</label>
                             <input type="text" class="form-control" id="namaKaryawan" name="namaKaryawan"
                                 placeholder="" required>
                             <div class="invalid-feedback">
                                 Nama Karyawan Wajib di isi
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="namaKaryawan">NIK Karyawan</label>
                             <input type="text" class="form-control" id="nikKaryawan" name="nikKaryawan" placeholder=""
                                 required>
                             <div class="invalid-feedback">
                                 NIK Karyawan Wajib di isi
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="tlpKaryawan">No Tlp Karyawan</label>
                             <input type="number" class="form-control" id="tlpKaryawan" name="tlpKaryawan"
                                 placeholder="" required>
                             <div class="invalid-feedback">
                                 No Telepon Wajib di isi
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="alamatKaryawan">Alamat Karyawan</label>
                             <input type="text" class="form-control" id="alamatKaryawan" name="alamatKaryawan"
                                 placeholder="" required>
                             <div class="invalid-feedback">
                                 Alamat Karyawan Wajib di isi
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="jabatanKaryawan">Jabatan</label>
                             <select class="custom-select" id="jabatanKaryawan" name="jabatanKaryawan"
                                 placeholder="Pilih Jabatan" required>
                                 <option selected></option>
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
                             <input type="text" class="form-control" id="gajiKaryawan" name="gajiKaryawan"
                                 placeholder="" required>
                             <div class="invalid-feedback">
                                 Nominal Gaji Wajib di isi
                             </div>
                         </div>

                         <button type="submit" class="btn btn-primary ml-3 float-right ">Submit</button>
                         <!-- <button type=" button" class="btn btn-warning float-right">Kosongkan</button> -->

                     </div>
                     <!-- /.card-body -->
                 </form>

             </div>

         </div>
     </div>
 </div>

 <!-- Footer -->
 <?php $this->load->view('admin/template/footer') ?>

 <!-- JS -->
 <?php $this->load->view('admin/template/js') ?>