  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.0/dist/sweetalert2.js"></script>

  <script src="<?= base_url('assets/plugins/pace-progress/pace.min.js') ?>"></script>

  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/adminlte.min.js') ?>"></script>

  <script src="<?= base_url('assets/js/demo.js') ?>"></script>

  <script>
    $(function (){
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>

  <script>
    function edit(evt, data){
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");

      for (i = 0; i < tabcontent.length; i++){
        tabcontent[i].style.display = "none";
      }

      tablinks = document.getElementsByClassName("tablinks");

      for (i = 0; i < tablinks.length; i++){
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }

      document.getElementById(data).style.display = "block";
      evt.currentTarget.className += " active";
    }

    document.getElementById("defaultOpen").click();
  </script>
</body>
</html>

<!-- <script>
  $(document).ready(function(){
    load_data();

    function load_data(query){
      $.ajax({
        url:"<?= base_url() ?>daftarmenu/fetch",
        method:"POST",
        data:{query:query},
        success:function(data){
          $('#search_result').html(data);
        }
      })
    }

    $('#search_text').keyup(function(){
      var search = $(this).val();
      if(search != ''){
        load_data(search);
      }
      else{
        load_data();
      }
    });
  });
</script>

<script type="text/javascript">
  $(document).on('click', '.hapus_pesanan', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Hapus Pesanan',
      text: "Anda yakin ingin menghapus pesanan?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#30454A',
      cancelButtonColor: 'grey',
      cancelButtonText: 'Tidak',
      confirmButtonText: 'Yakin'
    }).then((result) =>{
      if (result.value){
        document.location.href = href;
      }
    })
  });
</script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#batal_pesanan').on('submit',function(e){
      e.preventDefault();
      Swal.fire({
        title: 'Batalkan Pesanan',
        text: "Anda yakin ingin membatalkan pesanan?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#30454A',
        cancelButtonColor: 'grey',
        cancelButtonText: 'Tidak',
        confirmButtonText: 'Yakin'
      }).then((result) =>{
        if (result.value){
          $.ajax({
            url:'<?= base_url('buktipemesanan/batal') ?>',
            data:$(this).serialize(),
            type:'POST',
            success:function(data){
              console.log(data);
              document.location.href = "<?= base_url('pesanan') ?>";
            },
            error:function(data){
              swal("Oops...", "Terjadi Kesalahan Sistem :(", "error");
            }
          });
        }
      })
    });
  });
</script>

<script type="text/javascript">
  $(document).on('click', '.terima_pesanan', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Terima Pesanan',
      text: "Anda yakin pesanan sudah diterima?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#30454A',
      cancelButtonColor: 'grey',
      cancelButtonText: 'Tidak',
      confirmButtonText: 'Yakin'
    }).then((result) =>{
      if (result.value){
        document.location.href = href;
      }
    })
  });
</script>

<script type="text/javascript">
  $(document).on('click', '.menghapus_foto', function(e){
    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
      title: 'Hapus Foto Profil',
      text: "Anda yakin ingin menghapus foto profil?",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#30454A',
      cancelButtonColor: 'grey',
      cancelButtonText: 'Tidak',
      confirmButtonText: 'Yakin'
    }).then((result) =>{
      if (result.value){
        document.location.href = href;
      }
    })
  });
</script> -->
