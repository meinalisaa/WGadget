<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class Brand extends ResourceController{
    use ResponseTrait;

    // public function index(){
    //   $data['judul'] = 'WGadget;
    // }

    public function getHpBrand($id_brand){
      $data['judul'] = 'WGadget | Brand';

      $pager    = \Config\Services::pager();
      $url      = base_url('/apiHp/getHpBrand/'.$id_brand);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('pages/brand', $data);
      }
    }

  }
