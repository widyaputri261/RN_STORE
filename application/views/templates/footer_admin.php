</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Pilih "Keluar" di bawah ini jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?= base_url(); ?>administrator/logout">Keluar</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url(); ?>assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="<?= base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?= base_url(); ?>assets/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>

<script>
  ClassicEditor
    .create(document.querySelector('#description'))
    .then(editor => {
      console.log(editor);
    })
    .catch(error => {
      console.log(error);
    });

  $("#settingSelectRegency").select2({
    placeholder: 'Pilih Kabupaten/Kota',
    language: 'id'
  })

  $("#sendMailTo").select2({
    placeholder: 'Pilih Tujuan',
    language: 'id'
  })
</script>

</body>
<script>
  $(document).ready(function() {
    $(document).on('click', '#select', function() {
      var productsId = $(this).data('id');
      var productsTitle = $(this).data('title');
      var productsStock = $(this).data('stock');
      var productsPriceBuy = $(this).data('buy');
      var productsPrice = $(this).data('sell');
      $('#item_id').val(productsId);
      $('#product_id').val(productsId);
      $('#product_name').val(productsTitle);
      $('#stock').val(productsStock);
      $('#price_buy').val(productsPriceBuy);
      $('#price_sell').val(productsPrice);
      $('#modal-item').modal('hide');
    })
  })
  // $('#regency').on('change', function() {
  //   // ambil data dari elemen option yang dipilih
  //   const price = $('#regency option:selected').data('price');
  //   const total = price;

  //   // tampilkan data ke element
  //   $('[name=biayaTambahan]').val(price);
  // });

  $(document).ready(function() {
    $(document).on('click', '#selectPaket', function() {
      var paketId = $(this).data('id');
      var paketTitle = $(this).data('title');
      var paketPrice = $(this).data('price');
      $('#item_id').val(paketId);
      $('#paket_id').val(paketId);
      $('#paket_name').val(paketTitle);
      $('#price').val(paketPrice);
      $('#modal-item').modal('hide');
    })
  })
</script>


</html>