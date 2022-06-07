<?= $this->extend('layout/template-admin') ?>
<?= $this->section('content') ?>
  <div class="col-lg-10 mt-3" style="left: 225px">
    <h1 class="ml-3">Daftar Hp</h1>

    <div class="col-lg-12 mt-2 mb-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div style="text-align: left; margin: 8px 7px 8px 0px">
                  <a class="btn btn-info" data-toggle="modal" data-target="#tambahhpModal" style="color: white" type="submit">
                      <i class="fas fa-plus" style="margin-right: 10px"></i> Tambah Hp
                  </a>
                </div>
              </div>

              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr style="text-align: center">
                      <th>No.</th>
                      <th>Nama HP</th>
                      <th>Foto HP</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      $no = 1;
                      foreach($database as $val){
                    ?>

                    <tr>
                      <td style="text-align: center"><?= $no ?></td>
                      <td><?= $val->nama_hp ?></td>
											<td><center><img src="<?= base_url('/assets/img/hp/'.$val->nama_brand.'/'.$val->foto_hp) ?>" style="max-width: 100px"></center></td>
                      <td style="text-align: center">
												<a href="<?= site_url('admin/detail_hp/'.$val->id_hp)?>">
                        	<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal2">
														<i class="fas fa-eye"></i>
													</button>
												</a>

                        <a href="<?= site_url('admin/ubah_hp/'.$val->id_hp)?>" class="btn btn-warning btn-sm">
                          <i class="fas fa-edit"></i>
                        </a>

                        <a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapusmenuModal<?= $val->id_hp ?>" style="color: white" type="submit">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>

                    <?php $no++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    .switch{
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input{
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider{
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before{
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider{
      background-color: #2196F3;
    }

    input:focus + .slider{
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before{
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    .slider.round{
      border-radius: 34px;
    }

    .slider.round:before{
      border-radius: 50%;
    }
  </style>

  <?php foreach($database as $val) : ?>
    <div class="modal fade" id="hapusmenuModal<?= $val->id_hp ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 5px">
          <div class="modal-body">
            <span>
              <p style="border-radius: 50%; border: 4px solid #FACEA8; width: 85px; height: 85px; margin-left: auto; margin-right: auto; margin-top: 30px"></p>
              <p style="color: #F8BB86; font-size: 60px; margin-top: -105px; margin-left: 225px">!</p>
            </span>

            <h3 class="modal-title" id="exampleModalLabel" align="center">
              <b style="color: #595959">Hapus hp</b>
            </h3>

            <h5 class="modal-title" id="exampleModalLabel" align="center" style="color: #545454">Anda yakin ingin menghapus hp ini?</h5>

            <br>

            <div class="row mb-2">
              <a class="btn" href="<?= base_url('admin/hapushp/'.$val->id_hp) ?>" style="background: #30454A; color: white; margin-left: auto; margin-right: 10px; width: 105px; padding: 10px">Yakin</a>
              <button class="btn" type="button" data-dismiss="modal" style="background: grey; color: white; margin-right: auto; margin-left: 10px; width: 105px; padding: 10px">Tidak</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>

  <?php foreach($database as $val) : ?>
    <div class="modal fade" id="tambahhpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="border-radius: 5px">
          <div class="modal-body">
          <h3 class="modal-title" id="exampleModalLabel" align="center">
              <b style="color: #595959">Tambah Hp</b>
            </h3>

            <br>

            <form action="<?= base_url('admin/tambahhp') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  	<label>Nama hp</label><br>
                  	<input type="text" name="nama_hp" class="form-control">
                </div>
                <div class="form-group" style="text-align: center">
                	   <button type="submit" class="btn" style="background: #460137; color: white; border-radius: 20px; width: 200px">Tambah hp</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach ?>
<?= $this->endSection() ?>