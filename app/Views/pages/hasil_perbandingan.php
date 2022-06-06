<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center">Perbandingan Hp</h1>

    <div class="row mt-3">
      <div class="col-md-4">
        <form action="<?= base_url('/perbandinganhp/compare') ?>" method="POST" style="width: 100%">
          <select name="hp_1" class="form-control">
            <option selected="selected" disabled="disabled">Pilih Hp 1</option>
            <?php foreach($database as $db) : ?>
              <option value="<?= $db->id_hp ?>"><?= $db->nama_hp ?></option>
            <?php endforeach ?>
          </select>

          <select name="hp_2" class="form-control mt-2">
            <option selected="selected" disabled="disabled">Pilih Hp 2</option>
            <?php foreach($database as $db) : ?>
              <option value="<?= $db->id_hp ?>"><?= $db->nama_hp ?></option>
            <?php endforeach ?>
          </select>

          <button class="btn mt-2" type="submit" style="background-color: #460137; color: white; width: 100%" name="submit">Bandingkan Hp</button>
        </form>
      </div>

      <div class="col-md-8">
        <p class="text-muted" style="margin-left: 25px">Hp yang dibandingkan sama. Harap memilih Hp yang berbeda.<p>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>
