<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width,initial-scale = 1,shrink-to-fit = no">
    <link href="<?= base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?= base_url('/assets/css/adminlte.min.css') ?>">

    <title><?= $judul ?></title>
	</head>

	<?php $session = \Config\Services::session() ?>
	<body style="background-color: #460137;">
		<div class="container" style="margin-top: 5%; margin-bottom: 5%;">
			<div class="card" style="padding: 25px; width: 40%; margin: auto;  box-shadow: 0px 0px 13px rgba(0,0,0,0.5);">
				<div class="row" style="text-align: center;">
					<div class="col">
						<img src="<?= base_url('/assets/img/logo/logo-ungu.png') ?>" style="max-width: 150px;">
					</div>
				</div>


				<div class="row mt-4">
					<div class="col">
						<?= $session->getFlashdata('message') ?>
						<form action="<?= base_url('/admin/login') ?>" method="POST">
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email" placeholder="Email" style="padding: 20px 20px">
							</div>

							<div class="form-group">
								<input type="password" class="form-control" id="kata_sandi" name="kata_sandi" placeholder="Kata Sandi" style="padding: 20px 20px">
								<span id="show" onclick="show()" style="position: relative; z-index: 1; left: 90%; top: -31px; cursor: pointer; color: #AFAFAF"><i class="fa fa-eye icon"></i></span>
							</div>
							
							<button class="form-control btn" style="background: #460137; color: white; margin-top: -30px;" type="submit" name="submit">Masuk</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			function show(){
				var x = document.getElementById('kata_sandi').type;

				if (x == 'kata_sandi'){
					document.getElementById('kata_sandi').type = 'text';
					document.getElementById('show').innerHTML = '<i class="fa fa-eye-slash icon"></i>';
				}
				else{
					document.getElementById('kata_sandi').type = 'kata_sandi';
					document.getElementById('show').innerHTML = '<i class="fa fa-eye icon"></i>';
				}
			}
		</script>