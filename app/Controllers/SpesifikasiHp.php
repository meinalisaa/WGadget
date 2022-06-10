<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class SpesifikasiHp extends ResourceController{
    use ResponseTrait;

    public function spek_hp($id_hp){
      $data['judul'] = 'Wgadget | Spesifikasi';

      $pager    = \Config\Services::pager();
      $url      = base_url('/apiHp/getOne/'.$id_hp);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('pages/spesifikasi_hp', $data);
      }
    }

  }
