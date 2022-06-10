<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <?php foreach($brand as $br) : ?>
      <a href="<?= base_url('beranda/brand/'.$br->nama_brand) ?>">
        <p><?=  $br->nama_brand ?></p>
      </a>
    <?php endforeach ?>

    <h1 align="center">Daftar Hp</h1>

    <div class="row">
      <?php foreach($database as $db) : ?>
        <div class="col-md-2" style="margin-top: 10px; text-align: center">
          <a href="<?= base_url('beranda/hp/'.$db->id_hp) ?>">
            <div class="card" style="padding: 20px 10px 70px 10px; width: 100%; height: 200px">
              <img src="<?= base_url('/assets/img/hp/'.$db->foto_hp) ?>" style="height: 80%; margin-left: auto; margin-right: auto">
              <p style="margin-top: 10px"><?= $db->nama_hp ?></p>
            </div>
          </a>
        </div>
      <?php endforeach ?>
    </div>
  </div>
<?= $this->endSection() ?>
