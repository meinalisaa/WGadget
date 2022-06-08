<?= $this->extend('layout/template-admin') ?>
<?= $this->section('content') ?>
<div class="col-lg-10 mt-4 mb-3" style="left: 225px">
	<div class="row mt-3">
    <a href="<?= base_url('admin/daftar_hp') ?>" style="color: black; margin-left: 15px"><h5><i class="fa fa-arrow-left"></i></h5></a>
    <h2 style="margin-left: 15px; margin-top: -8px"><b>Detail Hp</b></h2>
	</div>

	<div class="row mt-2">
		<div class="col-lg-12">
			<center>
				<img src="<?= base_url('/assets/img/hp/'.$database->nama_brand.'/'.$database->foto_hp) ?>" style="width: 200px; object-fit: contain;">
			</center>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-lg-6">
			<div class="form-group">
				<label>Nama Brand</label>
				<input value="<?= $database->nama_brand ?>" class="form-control" readonly disabled>
			</div>
			
			<div class="form-group">
				<label>Nama Hp</label>
				<input value="<?= $database->nama_hp ?>" class="form-control" readonly disabled>
			</div>
			
			<div class="form-group">
				<label>Tanggal Rilis</label>
				<input value="<?= date('d-m-Y', strtotime($database->tgl_rilis)) ?>" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Ukuran Layar</label>
				<input value="<?= $database->ukuran_layar ?> Inci" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Sistem Operasi</label>
				<input value="<?= $database->sistem_operasi ?>" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Chipset</label>
				<input value="<?= $database->chipset ?>" class="form-control" readonly disabled>
			</div>
		</div>

		<div class="col-lg-6">
			<div class="form-group">
				<label>Memori</label>
				<input value="<?= $database->memori ?>" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Daya Baterai</label>
				<input value="<?= $database->daya_baterai ?> mAh" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Kamera</label>
				<input value="<?= $database->kamera ?>" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Jaringan</label>
				<input value="<?= $database->jaringan ?>" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input value="Rp<?= number_format($database->harga, 2,',','.') ?>" class="form-control" readonly disabled>
			</div>

			<div class="form-group">
				<label>Warna</label>
				<input value="<?= $database->warna ?>" class="form-control" readonly disabled>
			</div>
		</div>
  </div>
</div>
<?= $this->endSection() ?>
