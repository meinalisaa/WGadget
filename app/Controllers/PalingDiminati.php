<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\InterestModel;

  class PalingDiminati extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'WGadget | Paling Diminati';
      $url = base_url('/palingdiminati/getInterest');

      $curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('pages/paling_diminati', $data);
      }
    }

    public function getInterest(){
      $model      = new InterestModel();
      $data['db'] = $model->getAll();
      return $this->respond($data['db'], 200, 'Daftar ponsel yang paling diminati berhasil ditampilkan.');
    }
  }
