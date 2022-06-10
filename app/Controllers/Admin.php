<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
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

    public function tambahBrand(){
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

    public function ubahBrand($id_brand){
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
          $url      = base_url('/apiBrand/updateOne/'.$id_brand.'/'.$nama_brand);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $session->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Brand berhasil diperbarui.</div>');
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

    public function hapusBrand($id_brand){
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

    public function detail_hp($id_hp){
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

    public function ubah_hp($id_hp){
      $data['judul'] = 'Admin | Ubah HP';

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
        echo view('admin/ubah_hp', $data);
      }
    }

    public function ubahHp($id_hp = 0){
      $pager          = \Config\Services::pager();
      $session        = \Config\Services::session();

      $nama_hp        = ucwords($this->request->getVar('nama_hp'));
      $foto_hp        = strtolower($this->request->getVar('foto_hp'));
      $tgl_rilis      = $this->request->getVar('tgl_rilis');
      $ukuran_layar   = $this->request->getVar('ukuran_layar');
      $sistem_operasi = $this->request->getVar('sistem_operasi');
      $chipset        = $this->request->getVar('chipset');
      $memori         = $this->request->getVar('memori');
      $daya_baterai   = $this->request->getVar('daya_baterai');
      $kamera         = $this->request->getVar('kamera');
      $jaringan       = strtoupper($this->request->getVar('jaringan'));
      $harga          = $this->request->getVar('harga');
      $warna          = ucwords($this->request->getVar('warna'));

      $data = [
        'nama_hp'         => $nama_hp,
        'foto_hp'         => $foto_hp,
        'tgl_rilis'       => $tgl_rilis,
        'ukuran_layar'    => $ukuran_layar,
        'sistem_operasi'  => $sistem_operasi,
        'chipset'         => $chipset,
        'memori'          => $memori,
        'daya_baterai'    => $daya_baterai,
        'kamera'          => $kamera,
        'jaringan'        => $jaringan,
        'harga'           => $harga,
        'warna'           => $warna
       ];

      if(!empty($data)){
        $url      = base_url('/apiHp/getHp/'.$nama_hp);
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Hp sudah tersedia.</div>');
          return redirect()->route('admin/daftar_hp');
        }
        else{
          $url      = base_url('/apiHp/updateOne/'.$id_hp.'/'.$data);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $session->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Hp berhasil diperbarui.</div>');
            return redirect()->route('admin/daftar_hp');
          }
          else{
            $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Terjadi kesalahan.</div>');
            return redirect()->route('admin/daftar_hp');
          }
        }
      }
      else{
        $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Nama hp tidak boleh kosong.</div>');
        return redirect()->route('admin/daftar_hp');
      }
    }
    
    public function hapusHp($id_hp){
      $pager    = \Config\Services::pager();
      $session  = \Config\Services::session();
      $url      = base_url('/apiHp/getOne/'.$id_hp);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $url      = base_url('/apiHp/deleteOne/'.$id_hp);
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $session->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Hp berhasil dihapus.</div>');
          return redirect()->route('admin/daftar_hp');
        }
      }
    }

  }
