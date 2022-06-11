<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-4 mb-4">
    <div class="row">
      <a href="<?= base_url('beranda/brand/'.$database->nama_brand) ?>" style="color: black"><h4><i class="fa fa-arrow-left"></i></h4></a>
      <h1 style="margin-top: -10px; margin-left: 20px"><b><?= $database->nama_hp ?></b></h1>
    </div>

    <div class="col-md-12 mt-2" style="margin: auto">
      <div style="float: left; width: 20%; margin: 10px 30px">
        <img src="<?= base_url('/assets/img/hp/'.$database->foto_hp) ?>" style="height: 320px">
      </div>

      <div style="float: right; width: 70%">
        <table style="width: 100%" border="2" class="mt-2">
          <tr>
            <td style="width: 20%; background: #F0F0F0">Tanggal Rilis</td>
            <td><?= date('d-m-Y', strtotime($database->tgl_rilis)) ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Ukuran Layar</td>
            <td><?= $database->ukuran_layar ?> inci</td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Sistem Operasi</td>
            <td><?= $database->sistem_operasi ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Chipset</td>
            <td><?= $database->chipset ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Ukuran Memori</td>
            <td><?= $database->memori ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Daya Baterai</td>
            <td><?= $database->daya_baterai ?> mAh</td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Kamera</td>
            <td><?= $database->kamera ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Jaringan</td>
            <td><?= $database->warna ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Harga</td>
            <td>Rp <?= number_format($database->harga,0,',','.') ?></td>
          </tr>

          <tr>
            <td style="width: 20%; background: #F0F0F0">Warna</td>
            <td><?= $database->jaringan ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <style type="text/css">
    td{
      padding: 7px;
    }
  </style>
<?= $this->endSection() ?>
