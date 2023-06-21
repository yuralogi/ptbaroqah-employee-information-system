<!-- Begin Page Content -->

<nav class="main-header navbar navbar-expand navbar-white navbar-light shadow-sm p-1 mb-4 bg-white rounded-bottom ">
    <!-- Left navbar links -->
    <ul class="navbar-nav ml-2 mb-2">
        <li class="nav-item d-none d-sm-inline-block">
            <?php if ($this->session->userdata('role_user') == 'admin') : ?>
            <button data-toggle="modal" data-target="#modalInputKaryawan" type="button" class="btn btn-success"
                data-target="#modalInputKaryawan"><i class="fas fa-plus-circle"></i>
                Input Data</button>
        </li>
        <?php endif; ?>
        <li class="nav-item d-none d-sm-inline-block ">
            <a href="<?php echo site_url('admin/karyawan/manager') ?>" class="nav-link ">Data Manager</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo site_url('admin/karyawan/supervisor') ?>" class="nav-link">Data Supervisor</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo site_url('admin/karyawan/staff') ?>" class="nav-link">Data Staff</a>
        </li>


    </ul>
    </ul>
</nav>


<!-- /.container-fluid -->