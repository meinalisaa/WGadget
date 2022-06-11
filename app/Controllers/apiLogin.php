<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;

  class apiLogin extends ResourceController{
    use ResponseTrait;

    public function getAll(){
			if(!empty($_GET['email']) AND !empty($_GET['kata_sandi'])){
				if($_GET['email'] != "wgadget.indonesia@gmail.com" AND $_GET['kata_sandi'] != "adminwgadget123"){
					return $this->response->setStatusCode(204, 'Email atau kata sandi Salah.');
				}
				else{
					$model = new BrandModel();
      		$data  = $model->getAll();
					
					return $this->respond($data, 200, 'Login berhasil.');
				}
			}
			else {
				return $this->response->setStatusCode(400, 'Email atau kata sandi tidak boleh kosong.');
			}
    }
	}
