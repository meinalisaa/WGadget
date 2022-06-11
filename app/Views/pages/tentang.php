<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <h1 align="center"><b>Tentang</b></h1>

    <p class="mt-3" align="justify">
      WGadget adalah website yang dibangun oleh 4 orang mahasiswa Teknologi Informasi Universitas Sumatera Utara. Tim kami bernama Tim Wacana.
      Meski begitu, hasil dari website yang kami bangun tidak hanya sekedar wacana. Kami akhirnya berhasil membangun website ini yang bertujuan
      untuk membantu pengguna dalam mengetahui informasi mengenai spesifikasi suatu ponsel atau HP. Selain itu, website ini juga kami bangun
      dengan tujuan untuk memenuhi tugas besar Mata Kuliah Pemrograman Integratif.
    </p>

    <h3><b>Meet Our Team!</b></h3>

    <div class="col-md-12">
      <div class="row">
        <img src="<?= base_url('/assets/img/tim/Milpa.jpeg') ?>" style="width: 190px; margin-right: 20px">
        <img src="<?= base_url('/assets/img/tim/Dinda.png') ?>" style="width: 190px; margin-right: 20px">
        <img src="<?= base_url('/assets/img/tim/Meina.jpg') ?>" style="width: 190px; margin-right: 20px">
        <img src="<?= base_url('/assets/img/tim/Pije.jpeg') ?>" style="width: 190px; margin-right: 20px">
      </div>

      <table>
        <tr>
          <td style="width: 180px; text-align: center">Milpa Wahyuni Siregar</td>
          <td style="width: 240px; text-align: center">Dinda Julia Putri</td>
          <td style="width: 190px; text-align: center">Meina Lisa</td>
          <td style="width: 220px; text-align: center">Fildzah Alifia Lubis</td>
        </tr>

        <tr>
          <td style="width: 180px; text-align: center">191402005</td>
          <td style="width: 240px; text-align: center">191402008</td>
          <td style="width: 190px; text-align: center">191402032</td>
          <td style="width: 220px; text-align: center">191402044</td>
        </tr>
      </table>
    </div>
  </div>
<?= $this->endSection() ?>
