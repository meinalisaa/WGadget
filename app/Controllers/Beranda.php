<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class Beranda extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'WGadget';

      $url = base_url('/apiHp/getAll');
      $curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());

        $url = base_url('/apiBrand/getAll');

        $curl = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $data['brand'] = json_decode($response->getBody());
          echo view('pages/beranda', $data);
        }
      }
    }

    public function Brand($nama_brand){
      $data['judul']      = 'WGadget | Brand '.$nama_brand;
      $data['nama_brand'] = $nama_brand;

      $pager    = \Config\Services::pager();
      $url      = base_url('/apiHp/getBrand/'.$nama_brand);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());

        $url      = base_url('/apiBrand/getAll');
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        $data['brand'] = json_decode($response->getBody());
        echo view('pages/brand', $data);
      }
    }

    public function Hp($id_hp){
      $data['judul'] = 'Wgadget | Spesifikasi Hp';

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
