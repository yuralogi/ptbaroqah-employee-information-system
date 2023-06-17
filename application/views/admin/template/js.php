<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /vendor/bootstrap/js/bootstrap.bundle.min.js">
</script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /js/sb-admin-2.min.js"></script>

<!-- datatable -->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /vendor/datatables/dataTables.bootstrap4.min.js">
</script>

<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /js/demo/datatables-demo.js"></script>

<!-- SweetAlert -->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /js/sweetalert2.all.min.js"></script>

<!-- jquery Number Mask -->
<script src="<?php echo base_url('assets/sbadmin2-templating') ?> /vendor/jquery-mask-number/jquery.masknumber.min.js">
</script>


<!-- MyJS -->

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict';
    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }, false);
})();
</script>

<!-- Rupiah Formating -->
<script>
$(document).ready(function() {
    $(".nominal-rupiah").keyup(function() {
        console.log("Berhasil");
        $(this).maskNumber({
            integer: true,
            thousands: "."
        })
    })
})
</script>

<!-- Limit Percent -->
<script>
$('.percent-bonus').keyup(function() {
    if ($(this).val() > 100) {
        alert("Masukan Bonus antara 10% s/d 100% ");
        $(this).val('');
    }
});
</script>

<!-- SweetAlert -->
<script>
const flashData = $('.flash-data').data('flashdata');

if (flashData == "ditambahkan") {
    Swal.fire(
        'Berhasil!',
        'Data Telah di Ditambahkan',
        'success'
    )
} else if (flashData == "dihapus") {
    Swal.fire(
        'Berhasil!',
        'Data telah dihapus',
        'success'
    )
} else if (flashData == "gagal-kirim") {
    Swal.fire(
        'Gagal!',
        'Pilih Minimal Satu Data',
        'error'
    )
} else if (flashData == "berhasil-diupdate") {
    Swal.fire(
        'Berhasil!',
        'Data Telah di Update',
        'success'
    )
} else if (flashData == "gagal-login") {
    Swal.fire(
        'Gagal',
        'Username dan Password tidak ditemukan',
        'error'
    )
}
</script>

<script>
function confirmLogout() {
    Swal.fire({
        title: 'Anda Yakin Ingin Keluar?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Keluar',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?php echo base_url('auth/logout'); ?>"
        }
    })
}
</script>

<script>
function confirmDelete() {
    Swal.fire({
        title: 'Anda Yakin untuk Menghapus?',
        text: "",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yakin',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "<?php echo base_url('admin/karyawan/deletekaryawan') ?>"
        }
    })
}
</script>
</script>