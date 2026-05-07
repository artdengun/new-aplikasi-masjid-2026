
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('dash/vendor/apexcharts/apexcharts.min.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/chart.js/chart.umd.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/echarts/echarts.min.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/quill/quill.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/simple-datatables/simple-datatables.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/tinymce/tinymce.min.js'); ?>"></script>
  <script src="<?php echo base_url('dash/vendor/php-email-form/validate.js'); ?>"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- Template Main JS File -->
  <script src="<?php echo base_url('dash/js/main.js'); ?>"></script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  // =========================================
  // APEX CHART
  // =========================================
  const reportChart = document.querySelector("#reportsChart");

  if (reportChart) {
    new ApexCharts(reportChart, {
      series: [{
        name: 'Pemasukan',
        data: [1000000, 1500000, 1200000, 2000000]
      }, {
        name: 'Pengeluaran',
        data: [800000, 900000, 1000000, 1200000]
      }],
      chart: {
        height: 350,
        type: 'area',
        toolbar: {
          show: false
        }
      },
      colors: ['#2ecc71', '#e74c3c'],
      stroke: {
        curve: 'smooth',
        width: 2
      },
      xaxis: {
        categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4']
      }
    }).render();
  }

  // =========================================
  // FORMAT RUPIAH
  // =========================================
  const inputJumlah = document.getElementById('jumlah');

  if (inputJumlah) {
    inputJumlah.addEventListener('input', function(e) {

      let value = e.target.value.replace(/\D/g, '');

      if (value.length > 0) {
        value = new Intl.NumberFormat('id-ID').format(value);
      }

      e.target.value = value;
    });
  }



  // =========================================
  // FLASHDATA SUCCESS
  // =========================================
  <?php if(session()->getFlashdata('success')): ?>

    Swal.fire({
      icon: 'success',
      title: 'Berhasil',
      text: <?= json_encode(session()->getFlashdata('success')); ?>,
      timer: 2000,
      showConfirmButton: false
    });

  <?php endif; ?>


  // =========================================
  // FLASHDATA ERROR
  // =========================================
  <?php if(session()->getFlashdata('errors')): ?>

    Swal.fire({
      icon: 'error',
      title: 'Gagal',
      html: `
        <?php
          foreach(session()->getFlashdata('errors') as $e){
            echo $e . '<br>';
          }
        ?>
      `
    });

  <?php endif; ?>

  // =========================================
  // DELETE SWEETALERT
  // =========================================
  document.addEventListener("click", function(e){

    const btnDelete = e.target.closest('.btn-delete');

    if (!btnDelete) return;

    e.preventDefault();

    const url = btnDelete.getAttribute('data-url');

    Swal.fire({
      title: 'Yakin?',
      text: 'Data akan dihapus permanen!',
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#6c757d',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {

      if (result.isConfirmed) {

        Swal.fire({
          title: 'Menghapus...',
          text: 'Sedang memproses data',
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading();
          }
        });

        window.location.href = url;
      }
    });

  });

  // =========================================
  // FORM SUBMIT SWEETALERT
  // =========================================
  const formTransaksi = document.querySelector('.form-transaksi');

  if (formTransaksi) {

    formTransaksi.addEventListener('submit', function(e){

      e.preventDefault();

      Swal.fire({
        title: 'Simpan Data?',
        text: 'Pastikan data transaksi sudah benar',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#198754',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, simpan!',
        cancelButtonText: 'Batal'
      }).then((result) => {

        if (result.isConfirmed) {

          Swal.fire({
            title: 'Menyimpan...',
            text: 'Sedang memproses data',
            allowOutsideClick: false,
            didOpen: () => {
              Swal.showLoading();
            }
          });

          formTransaksi.submit();
        }

      });

    });

  }

});
</script>
</body>

</html>