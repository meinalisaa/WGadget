<?= $this->extend('layout/template-admin') ?>
<?= $this->section('content') ?>
	<div class="col-lg-10 mt-4 mb-3" style="left: 225px">
		<div class="row ml-3">
	    <a href="<?= base_url('admin/daftar_hp') ?>" style="color: black"><h5><i class="fa fa-arrow-left"></i></h5></a>
	    <h2 style="margin-left: 15px; margin-top: -8px"><b>Detail Hp</b></h2>
		</div>

		<div class="row mt-2">
			<div class="col-lg-12">
				<center>
					<img src="<?= base_url('/assets/img/hp/'.$database->foto_hp) ?>" style="width: 200px; object-fit: contain;">
				</center>
			</div>
		</div>

		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="form-group ml-3" style="width: 95%">
					<label>Nama Brand</label>
					<input value="<?= $database->nama_brand ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Nama Hp</label>
					<input value="<?= $database->nama_hp ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Tanggal Rilis</label>
					<input value="<?= date('d-m-Y', strtotime($database->tgl_rilis)) ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Ukuran Layar</label>
					<input value="<?= $database->ukuran_layar ?> Inci" class="form-control" readonly disabled>
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Sistem Operasi</label>
					<input value="<?= $database->sistem_operasi ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Chipset</label>
					<input value="<?= $database->chipset ?>" class="form-control" readonly disabled>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Memori</label>
					<input value="<?= $database->memori ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Daya Baterai</label>
					<input value="<?= $database->daya_baterai ?> mAh" class="form-control" readonly disabled>
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Kamera</label>
					<input value="<?= $database->kamera ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Jaringan</label>
					<input value="<?= $database->jaringan ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Harga</label>
					<input value="Rp<?= number_format($database->harga, 0,',','.') ?>" class="form-control" readonly disabled>
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Warna</label>
					<input value="<?= $database->warna ?>" class="form-control" readonly disabled>
				</div>
			</div>
	  </div>
	</div>
<?= $this->endSection() ?>
