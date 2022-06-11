<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width,initial-scale = 1,shrink-to-fit = no">
    <link rel="shortcut icon" href="<?= base_url('/assets/img/favicon.ico') ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@8.0.0/dist/sweetalert2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?= base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?= base_url('/assets/plugins/fontawesome-free/css/all.min.css') ?>">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="<?= base_url('/assets/plugins/pace-progress/themes/black/pace-theme-flat-top.css') ?>">
		<link rel="stylesheet" href="<?= base_url('/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
		<link rel="stylesheet" href="<?= base_url('/assets/css/adminlte.min.css') ?>">

    <title><?= $judul ?></title>

    <style>
      ::-webkit-scrollbar{
        width:12px
      }

      ::-webkit-scrollbar-track{
        box-shadow:inset 0 0 5px #AFAFAF
      }

      ::-webkit-scrollbar-thumb{
        background: #460137
      }

      #body-row{
        margin-left: 0;
        margin-right: 0;
      }

      #sidebar-container{
        min-height: 100vh;
        background-color: #460137;
        padding: 0px;
      }

      .siderbar-col{
        width: 230px;
        position: fixed;
    		top: 59px;
    		z-index: 100;
      }

      #sidebar-container .list-group a{
        margin-top: 10px;
        height: 50px;
        color: white;
        border: 0;
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand navbar-light bg-white topbar static-top" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3); position: fixed; position: left; z-index: 100; width: 100%">
      <a class="navbar-brand">
        <img src="<?= base_url('/assets/img/logo/logo-ungu.png') ?>" style="max-height: 30px; margin-left: 10px">
        <b style="margin-left: 10px; color: black">WGadget</b>
      </a>

      <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block" style="width: 0; border-right: 1px solid #E3E6F0; height: calc(4.375rem - 2rem); margin: auto 1rem"></div>

        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/logout') ?>" data-toggle="modal" data-target="#logoutModal" style="color: black">
            <i class="fa fa-sign-out-alt fa-fw mr-3"></i>Keluar
          </a>
        </li>
      </ul>
    </nav>

    <div class="row" id="body-row" style="padding-top: 50px">
      <div id="sidebar-container" class="siderbar-col col-lg-2 d-none d-md-block">
        <ul class="list-group">
          <?php if($judul == 'Admin | Daftar Brand') : ?>
            <a href="<?= base_url('/admin/daftar_brand') ?>" style="background-color: #2F0325" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center" style="background-color: #2F0325">
                <span class="fab fa-apple fa-fw mr-3"></span>
                <span>Daftar Brand</span>
              </div>
            </a>
          <?php else : ?>
            <a href="<?= base_url('/admin/daftar_brand') ?>" style="background-color: #460137" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center" style="background-color: #460137">
                <span class="fab fa-apple fa-fw mr-3"></span>
                <span>Daftar Brand</span>
              </div>
            </a>
          <?php endif ?>

          <?php if($judul == 'Admin | Daftar HP') : ?>
            <a href="<?= base_url('/admin/daftar_hp') ?>" style="background-color: #2F0325" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center" style="background-color: #2F0325">
                <span class="fa fa-mobile fa-fw mr-3" ></span>
                <span>Daftar Hp</span>
              </div>
            </a>
          <?php else : ?>
            <a href="<?= base_url('/admin/daftar_hp') ?>" style="background-color: #460137" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-start align-items-center" style="background-color: #460137">
                <span class="fa fa-mobile fa-fw mr-3" ></span>
                <span>Daftar HP</span>
              </div>
            </a>
          <?php endif ?>
        </ul>
      </div>

      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content" style="border-radius: 5px">
            <div class="modal-body">
              <span>
                <p style="border-radius: 50%; border: 4px solid #FACEA8; width: 85px; height: 85px; margin-left: auto; margin-right: auto; margin-top: 30px"></p>
                <p style="color: #F8BB86; font-size: 60px; margin-top: -105px; margin-left: 225px">!</p>
              </span>

              <h3 class="modal-title mt-4" id="exampleModalLabel" align="center">
                <b style="font-family: Arial; color: #595959">Keluar</b>
              </h3>

              <h5 class="modal-title" id="exampleModalLabel" align="center" style="color: #545454">Anda yakin ingin keluar?</h5>

              <br>

              <div class="row mb-2">
                <a class="btn" href="<?= base_url('admin/logout') ?>" style="background: #30454A; color: white; margin-left: auto; margin-right: 10px; width: 105px; padding: 10px">Yakin</a>
                <button class="btn" type="button" data-dismiss="modal" style="background: grey; color: white; margin-right: auto; margin-left: 10px; width: 105px; padding: 10px">Tidak</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?= $this->renderSection('content') ?>
    </div>

    <script src="<?= base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.0/dist/sweetalert2.js"></script>
    <script src="<?= base_url('/assets/plugins/pace-progress/pace.min.js') ?>"></script>
    <script src="<?= base_url('/assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/adminlte.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/demo.js') ?>"></script>

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
