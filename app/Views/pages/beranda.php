<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center"><b>Daftar HP</b></h1>

    <div class="row mt-3">
      <div class="col-md-2">
        <a href="<?= base_url() ?>">
          <button class="btn" align="center" style="color: white; padding: 5px; background: #460137; width: 100%; padding: 5px; margin-bottom: 10px">
            Semua Brand
          </button>
        </a>
      </div>

      <?php foreach($brand as $br) : ?>
        <?php if($judul == 'WGadget | Brand '.$br->nama_brand) : ?>
          <div class="col-md-2">
            <a href="<?= base_url('beranda/brand/'.$br->nama_brand) ?>">
              <button class="btn" align="center" style="color: white; padding: 5px; background: #460137; width: 100%; padding: 5px; margin-bottom: 10px">
                <?=  $br->nama_brand ?>
              </button>
            </a>
          </div>
        <?php else : ?>
          <div class="col-md-2">
            <a href="<?= base_url('beranda/brand/'.$br->nama_brand) ?>">
              <button class="btn" align="center" style="color: #460137; padding: 5px; border-color: #460137; width: 100%; padding: 5px; margin-bottom: 10px">
                <?=  $br->nama_brand ?>
              </button>
            </a>
          </div>
        <?php endif ?>
      <?php endforeach ?>
    </div>

    <hr class="mb-4">

    <div class="row">
      <?php foreach($database as $db) : ?>
        <div class="col-md-2" style="text-align: center">
          <a href="<?= base_url('beranda/hp/'.$db->id_hp) ?>">
            <div class="card" style="padding: 20px 10px; width: 100%; height: 170px">
              <img src="<?= base_url('/assets/img/hp/'.$db->foto_hp) ?>" style="height: 80%; margin-left: auto; margin-right: auto">
              <p style="color: black; margin-top: 10px"><?= substr($db->nama_hp, 0, 18) ?></p>
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
