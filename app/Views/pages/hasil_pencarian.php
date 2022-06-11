<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center">Hasil Pencarian <?= $cari ?></h1>

    <div class="row">
      <?php if($database){ foreach($database as $db){ ?>
        <div class="col-md-2" style="margin-top: 10px; text-align: center">
          <a href="<?= base_url('beranda/hp/'.$db->id_hp) ?>">
            <div class="card" style="padding: 20px 10px 70px 10px; width: 100%; height: 200px">
              <img src="<?= base_url('/assets/img/hp/'.$db->foto_hp) ?>" style="height: 80%; margin-left: auto; margin-right: auto">
              <p style="margin-top: 10px; color: black;"><?= $db->nama_hp ?></p>
            </div>
          </a>
        </div>
      <?php }} else{ ?>
        <div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show col-md-12 mt-3" role="alert">
          Hasil pencarian tidak ditemukan.
        </div>
      <?php } ?>
    </div>
  </div>

  <style type="text/css">
    .card:hover {
      background: #F0F0F0;
    }
  </style>
<?= $this->endSection() ?>
