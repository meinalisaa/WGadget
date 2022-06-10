<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\SearchModel;

  class apiSearch extends ResourceController{
    use ResponseTrait;

    public function getSearch($kata_kunci){
      $model      = new SearchModel();
      $kata_kunci = ucwords($kata_kunci);
      $data       = $model->getSearch($kata_kunci);

      if($data){
        foreach($data as $db){
          $pager    = \Config\Services::pager();
          $url      = base_url('/apiSearch/addSearch/'.$db->id_hp.'/'.$db->id_brand);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);
        }

        return $this->respond($data, 200, 'Data pencarian berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Tidak ada data yang ditemukan.');
      }
    }

    public function addSearch($id_hp, $id_brand){
      $model = new SearchModel();
      $data = [
        'id_hp'    => $id_hp,
        'id_brand' => $id_brand
      ];

      $model->addSearch($data);
    }
  }
