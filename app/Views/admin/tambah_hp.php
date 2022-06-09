<?= $this->extend('layout/template-admin') ?>
<?= $this->section('content') ?>
<div class="col-lg-10 mt-4 mb-3" style="left: 225px">
	<div class="row ml-3">
    <a href="<?= base_url('admin/daftar_hp') ?>" style="color: black"><h5><i class="fa fa-arrow-left"></i></h5></a>
    <h2 style="margin-left: 15px; margin-top: -8px"><b>Tambah Hp</b></h2>
	</div>

	<form action="" method="post" enctype="multipart/form-data">
		<div class="row mt-3">
			<div class="col-lg-6">
				<div class="form-group ml-3" style="width: 95%">
					<label>Nama Brand</label>
					<input type="text" name="nama_brand" class="form-control">
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Nama Hp</label>
					<input type="text" name="nama_hp" class="form-control">
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Tanggal Rilis</label>
					<input type="date" name="tgl_rilis" class="form-control">
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Ukuran Layar</label>
					<input type="text" name="ukuran_layar" class="form-control">
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Sistem Operasi</label>
					<input type="text" name="sistem_operasi" class="form-control">
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Chipset</label>
					<input type="text" name="chipset" class="form-control">
				</div>

				<div class="form-group ml-3" style="width: 95%">
					<label>Memori</label>
					<input type="text" name="memori" class="form-control">
				</div>
			</div>

			<div class="col-lg-6">
				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Daya Baterai</label>
					<input type="text" name="daya_baterai" class="form-control">
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Kamera</label>
					<input type="text" name="kamera" class="form-control">
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Jaringan</label>
					<input type="text" name="jaringan" class="form-control">
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control">
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Warna</label>
					<input type="text" name="warna" class="form-control">
				</div>

				<div class="form-group" style="margin-left: 10px; width: 95%">
					<label>Foto Hp</label><br>
					<input type="file" id="foto_hp" name="foto_hp">
				</div>
			</div>
		</div>

		<div class="form-group">
			<center>
				<button class="btn" style="background: #460137; color: white; width: 200px">Simpan</button>
			</center>
		</div>
	</form>
</div>
<?= $this->endSection() ?>
