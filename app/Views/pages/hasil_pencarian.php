<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center">Hasil Pencarian <?= $cari ?></h1>

    <div class="row">
      <?php if($database){ foreach($database as $db){ ?>
        <div class="col-md-2" style="margin-top: 10px; text-align: center">
          <div class="card" style="padding: 20px 10px 70px 10px; width: 100%; height: 200px">
            <img src="<?= base_url('/assets/img/hp/'.$db->nama_brand.'/'.$db->foto_hp) ?>" style="height: 80%; margin-left: auto; margin-right: auto">
            <p style="margin-top: 10px"><?= $db->nama_hp ?></p>
          </div>
        </div>
      <?php }} else{ ?>
        <div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show col-md-12 mt-3" role="alert">
          Hasil pencarian tidak ditemukan.
        </div>
      <?php } ?>
    </div>
  </div>
<?= $this->endSection() ?>
