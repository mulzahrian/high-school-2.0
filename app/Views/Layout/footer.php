  <script src="<?= base_url('assets/libs/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/sidebarmenu.js') ?>"></script>
  <script src="<?= base_url('assets/js/app.min.js') ?>"></script>
  <script src="<?= base_url('assets/libs/simplebar/dist/simplebar.js') ?>"></script>
  <!-- solar icons -->
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <script>
    document.querySelectorAll('.table .btn, .card-body > .btn').forEach(function (button) {
      if (button.querySelector('iconify-icon')) {
        return;
      }

      var label = button.textContent.trim().toLowerCase();
      var icon = label.includes('delete') || label.includes('hapus')
        ? 'solar:trash-bin-minimalistic-linear'
        : label.includes('edit') || label.includes('ubah')
          ? 'solar:pen-new-square-linear'
          : label.includes('add') || label.includes('tambah')
            ? 'solar:add-circle-linear'
            : label.includes('save') || label.includes('simpan')
              ? 'solar:check-circle-linear'
              : label.includes('logout') || label.includes('keluar')
                ? 'solar:logout-2-linear'
                : null;

      if (icon) {
        button.insertAdjacentHTML('afterbegin', '<iconify-icon icon="' + icon + '" aria-hidden="true"></iconify-icon>');
      }
    });
  </script>

  <script src="https://cdn.ckeditor.com/4.22.0/standard/ckeditor.js"></script>

<script>
  CKEDITOR.replace('historyEditor');
</script>

</body>

</html>