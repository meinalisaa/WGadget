<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\InterestModel;

  class PalingDiminati extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'WGadget | Paling Diminati';

      $url      = base_url('/apiInterest/getAll');
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('pages/paling_diminati', $data);
      }
      else{
        $data['database'] = null;
        echo view('pages/paling_diminati', $data);
      }
    }
  }
