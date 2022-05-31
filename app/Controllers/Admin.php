<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;

  class Admin extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'Admin WGadget';
      $url = base_url('/admin/getBrand');

      $curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
  		  "headers" => [
  		 		"Accept" => "application/json"
  		 	]
  		]);

       if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('templates\head', $data);
        echo view('templates\navbar', $data);
        echo view('admin\index', $data);
        echo view('templates\foot', $data);
      }
    }

    public function getBrand(){
      $model      = new BrandModel();
      $data['db'] = $model->getAll();
      return $this->respond($data['db'], 200);
    }
  }
