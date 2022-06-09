<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class PerbandinganHp extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'WGadget | Perbandingan Hp';

      $url      = base_url('/apiHp/getAll');
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('pages/perbandingan_hp', $data);
      }
    }

    public function getCompare(){
      if(isset($_POST['submit'])){
        $hp_1 = $this->request->getVar('hp_1');
        $hp_2 = $this->request->getVar('hp_2');

        if($hp_1 == null){
          $session = \Config\Services::session();
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="font-family: Arial">Anda belum memilih Hp.</div>');

		      return redirect()->to('/perbandingan_hp');
        }
        elseif($hp_2 == null){
          $session = \Config\Services::session();
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="font-family: Arial">Anda belum memilih Hp.</div>');

		      return redirect()->to('/perbandingan_hp');
        }
        elseif($hp_1 == $hp_2){
          $session = \Config\Services::session();
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="font-family: Arial">Hp yang dibandingkan sama. Harap memilih Hp yang berbeda.</div>');

		      return redirect()->to('/perbandingan_hp');
        }
        else{
          $url      = base_url('/apiHp/getOne/'.$hp_1);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $data['hp_1'] = json_decode($response->getBody());

            $url      = base_url('/apiHp/getOne/'.$hp_2);
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            if($response->getStatusCode() == 200){
              $data['hp_2'] = json_decode($response->getBody());

              $url      = base_url('/apiHp/getAll');
              $curl     = service('curlrequest');
              $response = $curl->request('GET', $url, [
                "headers" => [
                  "Accept" => "application/json"
                ]
              ]);

              if($response->getStatusCode() == 200){
                $data['judul']    = 'WGadget | Perbandingan Hp';
                $data['database'] = json_decode($response->getBody());
                echo view('pages/hasil_perbandingan', $data);
              }
            }
          }
        }
      }
    }
  }
