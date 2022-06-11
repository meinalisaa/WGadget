<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class apiLogin extends ResourceController{
    use ResponseTrait;

    public function login($email = null, $kata_sandi = null){
      $data['email']      = 'wgadget.indonesia@gmail.com';
      $data['kata_sandi'] = 'adminwgadget123';

      if(!empty($email) AND !empty($kata_sandi)){
        if($email == $data['email'] AND $kata_sandi == $data['kata_sandi']){
  				return $this->response->setStatusCode(200, 'Login berhasil.');
  			}
  			else{
  				return $this->response->setStatusCode(204, 'Email atau kata sandi salah.');
  			}
      }
      else{
        $email      = strtolower($this->request->getVar('email'));
        $kata_sandi = $this->request->getVar('kata_sandi');

        if(empty($email) OR empty($kata_sandi)){
          return $this->response->setStatusCode(400, 'Email atau kata sandi tidak boleh kosong.');
        }
        else{
          if($email == $data['email'] AND $kata_sandi == $data['kata_sandi']){
    				return $this->response->setStatusCode(200, 'Login berhasil.');
    			}
    			else{
    				return $this->response->setStatusCode(204, 'Email atau kata sandi salah.');
    			}
        }
      }
    }
	}
