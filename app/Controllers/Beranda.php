<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\HpModel;

  class Beranda extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'WGadget';
      $url = base_url('/beranda/getHp');

       $curl = service('curlrequest');
       $response = $curl->request('GET', $url, [
  		 	"headers" => [
  		 		"Accept" => "application/json"
  		 	]
  		 ]);

       if($response->getStatusCode() == 200){
         $data['database'] = json_decode($response->getBody());
        echo view('pages\beranda', $data);
      }
    }

    public function getHp(){
      $model      = new HpModel();
      $data['db'] = $model->getAll();
      return $this->respond($data['db'], 200);
    }
  }
