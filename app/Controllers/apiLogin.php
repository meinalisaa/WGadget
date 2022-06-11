<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class apiLogin extends ResourceController{
    use ResponseTrait;

    public function login($email, $kata_sandi){
			if($email == "wgadget.indonesia@gmail.com" AND $kata_sandi == "adminwgadget123"){
				return $this->response->setStatusCode(200, 'Login berhasil.');
			}
			else{
				return $this->response->setStatusCode(204, 'Email atau kata sandi salah.');
			}
    }
	}