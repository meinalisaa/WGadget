<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;

  class Admin extends ResourceController{
    use ResponseTrait;

    public function admin_brand(){
      $data['judul'] = 'WGadget | Daftar Brand';
      $url = base_url('/admin/getBrand');

      $curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
  		  "headers" => [
  		 		"Accept" => "application/json"
  		 	]
  		]);

       if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('admin/daftar_brand', $data);
      }
    }

    public function getBrand(){
      $model      = new BrandModel();
      $data['db'] = $model->getAll();
      return $this->respond($data['db'], 200);
    }
  }
