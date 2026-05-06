
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

  <!-- Template Main JS File -->
  <script src="<?php echo base_url('dash/js/main.js'); ?>"></script>
  <script>
    // Contoh penggunaan ApexCharts untuk grafik laporan keuangan
    document.addEventListener("DOMContentLoaded", () => {
      new ApexCharts(document.querySelector("#reportsChart"), {
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
          toolbar: { show: false }
        },
        colors: ['#2ecc71', '#e74c3c'],
        stroke: { curve: 'smooth', width: 2 },
        xaxis: {
          categories: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4']
        }
      }).render();
});

</body>

</html>