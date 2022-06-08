<?= $this->extend('layout/template-admin') ?>
<?= $this->section('content') ?>
<div class="col-lg-10 mt-4 mb-3" style="left: 225px">
	<div class="row mt-3">
    <a href="<?= base_url('admin/daftar_hp') ?>" style="color: black; margin-left: 15px"><h5><i class="fa fa-arrow-left"></i></h5></a>
    <h2 style="margin-left: 15px; margin-top: -8px"><b>Ubah Hp</b></h2>
	</div>

	<div class="row mt-2">
    <form action="" method="post" enctype="multipart/form-data">
		<div class="col-lg-12">
			<center>
				<img src="<?= base_url('/assets/img/hp/'.$database->nama_brand.'/'.$database->foto_hp) ?>" style="width: 200px; object-fit: contain;">
        <input type="file" name="foto_hp">
			</center>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Nama Brand</label>
				<input type="text" name="nama_brand" value="<?= $database->nama_brand ?>" class="form-control" disabled>
			</div>

			<div class="form-group">
				<label>Nama Hp</label>
				<input type="text" name="nama_hp" value="<?= $database->nama_hp ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Tanggal Rilis</label>
				<input name="tgl_rilis" value="<?= date('d-m-Y', strtotime($database->tgl_rilis)) ?>" class="form-control" disabled>
			</div>

			<div class="form-group">
				<label>Ukuran Layar</label>
				<input type="text" name="ukuran_layar" value="<?= $database->ukuran_layar ?> Inci" class="form-control">
			</div>

			<div class="form-group">
				<label>Sistem Operasi</label>
				<input type="text" name="sistem_operasi" value="<?= $database->sistem_operasi ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Chipset</label>
				<input type="text" name="chipset" value="<?= $database->chipset ?>" class="form-control">
			</div>
		</div>

		<div class="col-lg-6">
			<div class="form-group">
				<label>Memori</label>
				<input type="text" name="memori" value="<?= $database->memori ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Daya Baterai</label>
				<input type="text" name="daya_baterai" value="<?= $database->daya_baterai ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Kamera</label>
				<input type="text" name="kamera" value="<?= $database->kamera ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Jaringan</label>
				<input type="text" name="jaringan" value="<?= $database->jaringan ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" name="harga" value="Rp<?= number_format($database->harga, 2,',','.') ?>" class="form-control">
			</div>

			<div class="form-group">
				<label>Warna</label>
				<input type="text" name="warna" value="<?= $database->warna ?>" class="form-control">
			</div>
		</div>
  </div>

  <div class="form-group">
    <center>
      <button class="btn" style="background: #460137; color: white; border-radius: 20px; width: 200px">Simpan</button>
    </center>
  </div>
</form>
</div>
<?= $this->endSection() ?>
