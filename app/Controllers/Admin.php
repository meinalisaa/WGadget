<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;
  use App\Models\HpModel;
  use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

  class Admin extends ResourceController{
    use ResponseTrait;

    public function daftar_brand(){
      $data['judul'] = 'Admin | Daftar Brand';

      $url      = base_url('/apiBrand/getAll');
      $curl     = service('curlrequest');
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

    public function tambah_brand(){
      $pager      = \Config\Services::pager();
      $session    = \Config\Services::session();
      $nama_brand = ucwords($this->request->getVar('nama_brand'));

      if(!empty($nama_brand)){
        $url      = base_url('/apiBrand/getBrand/'.$nama_brand);
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Brand sudah tersedia.</div>');
          return redirect()->route('admin/daftar_brand');
        }
        else{
          $url      = base_url('/apiBrand/addOne/'.$nama_brand);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 201){
            $session->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Brand berhasil ditambahkan.</div>');
            return redirect()->route('admin/daftar_brand');
          }
          else{
            $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Terjadi kesalahan.</div>');
            return redirect()->route('admin/daftar_brand');
          }
        }
      }
      else{
        $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Nama brand tidak boleh kosong.</div>');
        return redirect()->route('admin/daftar_brand');
      }
    }

    public function ubah_brand($id_brand = null){
      $model = new BrandModel();
      $json = $this->request->getJSON();

      if($json){
        $data = [
        'nama_brand' => $json->nama_brand
        ];
      }
      else{
        $input = $this->request->getRawInput();
        $data = [
        'nama_brand' => $input['nama_brand']
        ];
      }

      $model->update($id_brand, $data);
      $response = [
        'status'   => 200,
        'error'    => null,
        'messages' => [
          'success' => 'Data Updated'
        ]
      ];

      return $this->respond($response);
    }

    public function hapus_brand($id_brand){
      $pager    = \Config\Services::pager();
      $session  = \Config\Services::session();
      $url      = base_url('/apiBrand/getOne/'.$id_brand);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $url      = base_url('/apiBrand/deleteOne/'.$id_brand);
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $session->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Brand berhasil dihapus.</div>');
          return redirect()->route('admin/daftar_brand');
        }
      }
    }

    public function daftar_hp(){
      $data['judul'] = 'Admin | Daftar HP';

      $url      = base_url('/apiHp/getAll');
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('admin/daftar_hp', $data);
      }
    }

    public function detail_hp($id_hp = null){
      $data['judul'] = 'Admin | Detail HP';

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
        echo view('admin/detail_hp', $data);
      }
    }

    public function tambah_hp(){
      $data['judul'] = 'Admin | Tambah HP';
      echo view('admin/tambah_hp', $data);
    }
  }
