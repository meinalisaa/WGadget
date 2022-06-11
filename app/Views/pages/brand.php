<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container">

    <h1 align="center" style="margin-top: 20px;">Daftar Hp <?= $nama_brand ?></h1>

    <div class="row">
      <?php foreach($database as $db) : ?>
        <div class="col-md-3" style="margin-top: 10px; text-align: center">
          <a href="<?= base_url('beranda/hp/'.$db->id_hp) ?>">
            <div class="card" style="padding: 20px 10px 70px 10px; width: 100%; height: 200px">
              <img src="<?= base_url('/assets/img/hp/'.$db->foto_hp) ?>" style="height: 90%; margin-left: auto; margin-right: auto">
              <p style="color: black; margin-top: 10px"><?= $db->nama_hp ?></p>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>

  </div>

  <style type="text/css">
    .card:hover {
      background: #F0F0F0;
    }
  </style>
<?= $this->endSection() ?>
