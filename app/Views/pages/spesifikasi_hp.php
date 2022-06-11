<?= $this->extend('layout/template-user') ?>
<?= $this->section('content') ?>
  <div class="container mt-3 mb-4">
    <div class="col-md-12" style="margin: auto;">
      <h1 style="margin: 20px 30px;"><?= $database->nama_hp ?></h1>

      <div style="float: left; width: 20%; margin: 10px 30px;">
      	<img src="<?= base_url('/assets/img/hp/'.$database->foto_hp) ?>" style="height: 320px;">
      	<p style="margin-top: 10px; text-align: center;"><?= $database->nama_hp ?></p>

      </div>
      
      <div style="float: right; width: 70%;">
	      <table style="width: 100%;" border="2" class="mt-2">
	        <tr>
	          <td>Tanggal Rilis</td>
	  		  <td><?= $database->tgl_rilis ?></td>
	  	    </tr>

	        <tr>
	          <td>Ukuran Layar</td>
	  		  <td><?= $database->ukuran_layar ?> inci</td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>Sistem Operasi</td>
	  		  <td><?= $database->sistem_operasi ?></td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>Chipset</td>
	  		  <td><?= $database->chipset ?></td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>Ukuran Memori</td>
	  		  <td><?= $database->memori ?></td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>Daya Baterai</td>
	  		  <td><?= $database->daya_baterai ?> mAh</td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>Kamera</td>
	  		  <td><?= $database->kamera ?></td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>Jaringan</td>
	  		  <td><?= $database->warna ?></td>
	  	    </tr>
	  
	  	    <tr>
	  	  	  <td>harga</td>
	  		  <td>
	  			<?php
	  			  $harga = "Rp ".number_format($database->harga,2,',','.');
	  			  echo $harga;
	  			?>
	  		  </td>
	  	    </tr>

	  	    <tr>
	  	  	  <td>Warna</td>
	  		  <td><?= $database->jaringan ?></td>
	  	    </tr>
	      </table>
	  </div>

    </div>
  </div>

  <style type="text/css">
  	td {
  		padding: 7px; 
  		width: 50%;
  	}
  </style>
<?= $this->endSection() ?>
