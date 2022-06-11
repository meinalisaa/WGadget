<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container">
    <h1 align="center" style="margin: 20px;">Telusuri Brand</h1>
    <div class="row" style="margin: 20px 0;">
        <?php foreach($brand as $br) : ?>
          <div class="col-md-1" style="margin: auto;">
            <a href="<?= base_url('beranda/brand/'.$br->nama_brand) ?>">
              <div class="card" style="padding-top: 10px;">
                <p style="color: black; text-align: center;"><?=  $br->nama_brand ?></p>
              </div>
            </a>
          </div>
        <?php endforeach ?>
    </div>

    <h1 align="center">Daftar Hp</h1>
    <div class="row">
      <?php foreach($database as $db) : ?>
        <div class="col-md-2" style="margin-top: 10px; text-align: center">
          <a href="<?= base_url('beranda/hp/'.$db->id_hp) ?>">
            <div class="card" style="padding: 20px 10px 70px 10px; width: 100%; height: 200px">
              <img src="<?= base_url('/assets/img/hp/'.$db->foto_hp) ?>" style="height: 80%; margin-left: auto; margin-right: auto">
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
