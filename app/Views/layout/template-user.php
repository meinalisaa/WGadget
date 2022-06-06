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
        background:#30454A
      }
    </style>
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white" style="box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.3)">
      <a class="navbar-brand ml-3">
        <img src="<?= base_url('/assets/img/logo/logo-ungu.png') ?>" style="max-height: 30px">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php if($judul == 'WGadget') : ?>
            <li class="nav-item active">
              <b><a class="nav-link disabled" style="color: #460137">Beranda</a></b>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/') ?>">Beranda</a>
            </li>
          <?php endif ?>

          <?php if($judul == 'WGadget | Paling Diminati') : ?>
            <li class="nav-item active">
              <b><a class="nav-link disabled" style="color: #460137">Paling Diminati</a></b>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/paling_diminati') ?>">Paling Diminati</a>
            </li>
          <?php endif ?>

          <?php if($judul == 'WGadget | Bandingkan HP') : ?>
            <li class="nav-item active">
              <b><a class="nav-link disabled" style="color: #460137">Bandingkan HP</a></b>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/bandingkan_hp') ?>">Bandingkan HP</a>
            </li>
          <?php endif ?>

          <?php if($judul == 'WGadget | Tentang') : ?>
            <li class="nav-item active">
              <b><a class="nav-link disabled" style="color: #460137">Tentang</a></b>
            </li>
          <?php else : ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url('/tentang') ?>">Tentang</a>
            </li>
          <?php endif ?>
        </ul>

        <form action="<?= base_url('/search') ?>" method="POST" class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Search" name="cari">
          <button class="btn my-2 my-sm-0" type="submit" style="background-color: #460137; color: white" name="submit">Search</button>
        </form>
      </div>
    </nav>

    <?= $this->renderSection('content') ?>

    <script src="<?= base_url('/assets/plugins/jquery/jquery.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.0/dist/sweetalert2.js"></script>
    <script src="<?= base_url('/assets/plugins/pace-progress/pace.min.js') ?>"></script>
    <script src="<?= base_url('/assets/js/demo.js') ?>"></script>
  </body>
</html>
