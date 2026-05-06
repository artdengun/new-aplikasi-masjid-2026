
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

// Format input jumlah dengan pemisah ribuan
const input = document.getElementById('jumlah');

input.addEventListener('input', function(e) {
    let value = e.target.value.replace(/\D/g, '');

    if (value.length > 0) {
        value = new Intl.NumberFormat('id-ID').format(value);
    }

    e.target.value = value;
});
  </script>

<script>
document.addEventListener("DOMContentLoaded", function () {

  // ✅ FORMAT INPUT JUMLAH (AMAN)
  const input = document.getElementById('jumlah');
  if (input) {
    input.addEventListener('input', function(e) {
      let value = e.target.value.replace(/\D/g, '');

      if (value.length > 0) {
        value = new Intl.NumberFormat('id-ID').format(value);
      }

      e.target.value = value;
    });
  }

  // ✅ DELETE (PAKAI EVENT DELEGATION - WAJIB BUAT DATATABLE)
  document.addEventListener("click", function(e){
    const btn = e.target.closest('.btn-delete');
    if (!btn) return;

    e.preventDefault();
    const url = btn.getAttribute('data-url');

    Swal.fire({
      title: 'Yakin?',
      text: "Data akan dihapus permanen!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Ya, hapus!',
      cancelButtonText: 'Batal'
    }).then((result) => {
      if (result.isConfirmed) {

        // loading
        Swal.fire({
          title: 'Menghapus...',
          text: 'Sedang memproses',
          allowOutsideClick: false,
          didOpen: () => {
            Swal.showLoading();
          }
        });

        window.location.href = url;
      }
    });
  });

});
</script>


<script>
document.addEventListener("DOMContentLoaded", function () {

  const form = document.querySelector("form"); // atau kasih ID biar lebih aman

  if (form) {
    form.addEventListener("submit", function(e) {
      e.preventDefault();

      Swal.fire({
        title: 'Simpan data?',
        text: "Pastikan data sudah benar",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#28a745',
        cancelButtonColor: '#6c757d',
        confirmButtonText: 'Ya, simpan!',
        cancelButtonText: 'Batal'
      }).then((result) => {
        if (result.isConfirmed) {

          // loading dulu
          Swal.fire({
            title: 'Menyimpan...',
            text: 'Sedang memproses',
            allowOutsideClick: false,
            didOpen: () => {
              Swal.showLoading();
            }
          });

          form.submit(); // lanjut submit manual
        }
      });
    });
  }

});
</script>
</body>

</html>