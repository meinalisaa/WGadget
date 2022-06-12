<?= $this->extend('layout/template-admin') ?>
<?= $this->section('content') ?>
	<?php $session = \Config\Services::session() ?>

	<div class="col-lg-10 mt-4 mb-3" style="left: 225px">
		<div class="row ml-3">
	    <a href="<?= base_url('admin/daftar_hp') ?>" style="color: black"><h5><i class="fa fa-arrow-left"></i></h5></a>
	    <h2 style="margin-left: 15px; margin-top: -8px"><b>Tambah Hp</b></h2>
		</div>

		<div class="row ml-3 mr-3 mt-2"><?= $session->getFlashdata('message') ?></div>

		<form action="<?= base_url('/admin/tambahHp') ?>" method="POST" enctype="multipart/form-data">
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group ml-3" style="width: 95%">
						<label>Nama Brand</label>
						<select name="id_brand" class="form-control">
	            <option selected="selected" disabled="disabled">Pilih Brand</option>
	            <?php foreach($brand as $brand) : ?>
	              <option value="<?= $brand->id_brand ?>"><?= $brand->nama_brand ?></option>
	            <?php endforeach ?>
	          </select>
					</div>

					<div class="form-group ml-3" style="width: 95%">
						<label>Nama Hp</label>
						<input type="text" id="nama_hp" name="nama_hp" class="form-control">
					</div>

					<div class="form-group ml-3" style="width: 95%">
						<label>Tanggal Rilis</label>
						<input type="date" id="tgl_rilis" name="tgl_rilis" class="form-control">
					</div>

					<div class="form-group ml-3" style="width: 95%">
						<label>Ukuran Layar</label>
						<input type="text" id="ukuran_layar" name="ukuran_layar" class="form-control">
					</div>

					<div class="form-group ml-3" style="width: 95%">
						<label>Sistem Operasi</label>
						<input type="text" id="sistem_operasi" name="sistem_operasi" class="form-control">
					</div>

					<div class="form-group ml-3" style="width: 95%">
						<label>Chipset</label>
						<input type="text" id="chipset" name="chipset" class="form-control">
					</div>

					<div class="form-group ml-3" style="width: 95%">
						<label>Memori</label>
						<input type="text" id="memori" name="memori" class="form-control">
					</div>
				</div>

				<div class="col-lg-6">
					<div class="form-group" style="margin-left: 10px; width: 95%">
						<label>Daya Baterai</label>
						<input type="text" id="daya_baterai" name="daya_baterai" class="form-control">
					</div>

					<div class="form-group" style="margin-left: 10px; width: 95%">
						<label>Kamera</label>
						<input type="text" id="kamera" name="kamera" class="form-control">
					</div>

					<div class="form-group" style="margin-left: 10px; width: 95%">
						<label>Jaringan</label>
						<input type="text" id="jaringan" name="jaringan" class="form-control">
					</div>

					<div class="form-group" style="margin-left: 10px; width: 95%">
						<label>Harga</label>
						<input type="text" id="harga" name="harga" class="form-control">
					</div>

					<div class="form-group" style="margin-left: 10px; width: 95%">
						<label>Warna</label>
						<input type="text" id="warna" name="warna" class="form-control">
					</div>

					<div class="form-group" style="margin-left: 10px; width: 95%">
						<label>Foto Hp</label><br>
						<input type="file" id="foto_hp" name="foto_hp">
					</div>
				</div>
			</div>

			<div class="form-group">
				<center>
					<button type="submit" class="btn" style="background: #460137; color: white; width: 200px" name="submit">Tambah</button>
				</center>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		var harga = document.getElementById('harga');
		harga.addEventListener('keyup', function(e){
			harga.value = formatRupiah(this.value, 'Rp ');
		});

		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			harga     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			if(ribuan){
				separator = sisa ? '.' : '';
				harga += separator + ribuan.join('.');
			}

			harga = split[1] != undefined ? harga + ',' + split[1] : harga;
			return prefix == undefined ? harga : (harga ? 'Rp ' + harga : '');
		}
	</script>
<?= $this->endSection() ?>
