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
                     action="<?php echo base_url() . 'admin/karyawan/index'; ?>" novalidate>
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
                             <input type="text" class="form-control nominal-rupiah" id="gajiKaryawan"
                                 name="gajiKaryawan" placeholder="" required>
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

 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center prevent-select ">
         <div class="sidebar-brand-icon">
             <i class="fas fa-building"></i>
         </div>
         <div class="sidebar-brand-text mx-1">Pt. Baroqah Jaya</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?php echo base_url('admin/dashboard')?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Tambah data
     </div>

     <li class="nav-item">
         <a class="nav-link collapsed" data-toggle="modal" data-target="#modalInputKaryawan" type=" button" href=""
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-user-plus"></i>
             <span>Input Karyawan</span>
         </a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Master Data
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
             aria-controls="collapseTwo">
             <i class="fas fa-fw fa-folder"></i>
             <span>Data Karyawan</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <h6 class="collapse-header">Pilih Data :</h6>
                 <a class="collapse-item" href="<?php echo base_url('admin/karyawan/manager')?>">Manager</a>
                 <a class="collapse-item" href="<?php echo base_url('admin/karyawan/supervisor')?>">Supervisor</a>
                 <a class="collapse-item" href="<?php echo base_url('admin/karyawan/staff')?>">Staff</a>
             </div>
         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">
     <!-- Heading -->
     <div class="sidebar-heading">
         Setting Bonus & PPh
     </div>

     <li class="nav-item">
         <a class="nav-link collapsed" type="button" href="<?php echo base_url('admin/settingbonus')?>"
             aria-expanded="true" aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Settings</span>
         </a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Sidebar -->