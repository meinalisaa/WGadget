<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center">Perbandingan Hp</h1>

    <div class="row mt-3">
      <div class="col-md-3">
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

      <div class="col-md-9">
        <table style="width: 100%">
          <tr align="center">
            <td><img src="<?= base_url('/assets/img/hp/'.$hp_1['nama_brand'].'/'.$hp_1['foto_hp']) ?>" style="width: 30%; margin-bottom: 10px"></td>
            <td rowspan="2">VS</td>
            <td><img src="<?= base_url('/assets/img/hp/'.$hp_2['nama_brand'].'/'.$hp_2['foto_hp']) ?>" style="width: 30%; margin-bottom: 10px"></td>
          </tr>

          <tr align="center">
            <td><h5><?= $hp_1['nama_hp'] ?></h5></td>
            <td><h5><?= $hp_2['nama_hp'] ?></h5></td>
          </tr>
        </table>

        <table style="width: 100%" border="2" class="mt-2">
          <tr>
            <?php if($hp_1['ukuran_layar'] < $hp_2['ukuran_layar']) : ?>
              <td style="padding: 7px" class="text-danger"><?= $hp_1['ukuran_layar'] ?> inci</td>
              <td style="padding: 7px" class="text-success"><?= $hp_2['ukuran_layar'] ?> inci</td>
            <?php elseif($hp_1['ukuran_layar'] > $hp_2['ukuran_layar']) : ?>
              <td style="padding: 7px" class="text-success"><?= $hp_1['ukuran_layar'] ?> inci</td>
              <td style="padding: 7px" class="text-danger"><?= $hp_2['ukuran_layar'] ?> inci</td>
            <?php else : ?>
              <td style="padding: 7px" class="text-primary"><?= $hp_1['ukuran_layar'] ?> inci</td>
              <td style="padding: 7px" class="text-primary"><?= $hp_2['ukuran_layar'] ?> inci</td>
            <?php endif ?>
          </tr>

          <tr>
            <td style="padding: 7px"><?= $hp_1['sistem_operasi'] ?></td>
            <td style="padding: 7px"><?= $hp_2['sistem_operasi'] ?></td>
          </tr>

          <tr>
            <?php if($hp_1['chipset'] == $hp_2['chipset']) : ?>
              <td style="padding: 7px" class="text-primary"><?= $hp_1['chipset'] ?></td>
              <td style="padding: 7px" class="text-primary"><?= $hp_2['chipset'] ?></td>
            <?php else : ?>
              <?php if(strpos($hp_1['chipset'], 'Apple') !== false) : ?>
                <td style="padding: 7px" class="text-success"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-danger"><?= $hp_2['chipset'] ?></td>
              <?php elseif(strpos($hp_2['chipset'], 'Apple') !== false) : ?>
                <td style="padding: 7px" class="text-danger"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-success"><?= $hp_2['chipset'] ?></td>
              <?php elseif(strpos($hp_1['chipset'], 'MediaTek') !== false) : ?>
                <td style="padding: 7px" class="text-success"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-danger"><?= $hp_2['chipset'] ?></td>
              <?php elseif(strpos($hp_2['chipset'], 'MediaTek') !== false) : ?>
                <td style="padding: 7px" class="text-danger"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-success"><?= $hp_2['chipset'] ?></td>
              <?php elseif(strpos($hp_1['chipset'], 'Qualcomm') !== false) : ?>
                <td style="padding: 7px" class="text-success"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-danger"><?= $hp_2['chipset'] ?></td>
              <?php elseif(strpos($hp_2['chipset'], 'Qualcomm') !== false) : ?>
                <td style="padding: 7px" class="text-danger"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-success"><?= $hp_2['chipset'] ?></td>
              <?php elseif(strpos($hp_1['chipset'], 'Exynos') !== false) : ?>
                <td style="padding: 7px" class="text-success"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-danger"><?= $hp_2['chipset'] ?></td>
              <?php else : ?>
                <td style="padding: 7px" class="text-danger"><?= $hp_1['chipset'] ?></td>
                <td style="padding: 7px" class="text-success"><?= $hp_2['chipset'] ?></td>
              <?php endif ?>
            <?php endif ?>
          </tr>

          <tr>
            <td style="padding: 7px"><?= $hp_1['memori'] ?></td>
            <td style="padding: 7px"><?= $hp_2['memori'] ?></td>
          </tr>

          <tr>
            <?php if($hp_1['daya_baterai'] < $hp_2['daya_baterai']) : ?>
              <td style="padding: 7px" class="text-danger"><?= $hp_1['daya_baterai'] ?> mAh</td>
              <td style="padding: 7px" class="text-success"><?= $hp_2['daya_baterai'] ?> mAh</td>
            <?php elseif($hp_1['daya_baterai'] > $hp_2['daya_baterai']) : ?>
              <td style="padding: 7px" class="text-success"><?= $hp_1['daya_baterai'] ?> mAh</td>
              <td style="padding: 7px" class="text-danger"><?= $hp_2['daya_baterai'] ?> mAh</td>
            <?php else : ?>
              <td style="padding: 7px" class="text-primary"><?= $hp_1['daya_baterai'] ?> mAh</td>
              <td style="padding: 7px" class="text-primary"><?= $hp_2['daya_baterai'] ?> mAh</td>
            <?php endif ?>
          </tr>

          <tr>
            <td style="padding: 7px"><?= $hp_1['kamera'] ?></td>
            <td style="padding: 7px"><?= $hp_2['kamera'] ?></td>
          </tr>

          <tr>
            <td style="padding: 7px"><?= $hp_1['jaringan'] ?></td>
            <td style="padding: 7px"><?= $hp_2['jaringan'] ?></td>
          </tr>

          <tr>
            <?php if($hp_1['harga'] < $hp_2['harga']) : ?>
              <td style="padding: 7px" class="text-danger">
                <?php
                  $harga = "Rp ".number_format($hp_1['harga'],2,',','.');
                  echo $harga;
                ?>
              </td>

              <td style="padding: 7px" class="text-success">
                <?php
                  $harga = "Rp ".number_format($hp_2['harga'],2,',','.');
                  echo $harga;
                ?>
              </td>
            <?php elseif($hp_1['harga'] > $hp_2['harga']) : ?>
              <td style="padding: 7px" class="text-success">
                <?php
                  $harga = "Rp ".number_format($hp_1['harga'],2,',','.');
                  echo $harga;
                ?>
              </td>

              <td style="padding: 7px" class="text-danger">
                <?php
                  $harga = "Rp ".number_format($hp_2['harga'],2,',','.');
                  echo $harga;
                ?>
              </td>
            <?php else : ?>
              <td style="padding: 7px" class="text-primary">
                <?php
                  $harga = "Rp ".number_format($hp_1['harga'],2,',','.');
                  echo $harga;
                ?>
              </td>

              <td style="padding: 7px" class="text-primary">
                <?php
                  $harga = "Rp ".number_format($hp_2['harga'],2,',','.');
                  echo $harga;
                ?>
              </td>
            <?php endif ?>
          </tr>
        </table>
      </div>
    </div>
  </div>
<?= $this->endSection() ?>
