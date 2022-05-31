<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center">DAFTAR HP</h1>

    <div class="row">
      <?php foreach($database as $db) : ?>
        <div class="col-md-2" style="margin-top: 10px; text-align: center">
          <div class="card" style="padding: 20px 10px 70px 10px; width: 100%; height: 200px">
            <img src="<?= base_url('/images/hp/'.$db->nama_brand.'/'.$db->foto_hp) ?>" style="height: 80%; margin-left: auto; margin-right: auto">
            <p style="margin-top: 10px"><?= $db->nama_brand." ".$db->nama_hp ?></p>
        </div>
      </div>
  <?php endforeach ?>
  </div>
<?= $this->endSection() ?>