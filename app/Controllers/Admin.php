<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

  class Admin extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul'] = 'WGadget | Masuk';
      echo view('admin/login', $data);
    }

    public function login(){
      $session       = \Config\Services::session();
      $data['judul'] = 'Admin | Daftar Brand';

      if(isset($_POST['submit'])){
        $email       = strtolower($_POST['email']);
        $kata_sandi  = $_POST['kata_sandi'];

        if(empty($kata_sandi) OR empty($email)){
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Email dan kata sandi tidak boleh kosong.</div>');
          return redirect()->route('admin', $data);
        }
        else{
          $url         = base_url('/apiLogin/login/'.$email.'/'.$kata_sandi);
          $curl        = service('curlrequest');
          $response    = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $url      = base_url('/apiBrand/getAll');
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            $data['database'] = json_decode($response->getBody());
            return redirect()->route('admin/daftar_brand', $data);
          }
          else{
            $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Email atau kata sandi salah.</div>');
            return redirect()->route('admin', $data);
          }
        }
      }
    }
    
    public function logout(){
      $data['judul'] = 'WGadget | Keluar';
      echo view('admin/login', $data);
    }

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
      $data['judul'] = 'Admin | Tambah Hp';

      $pager    = \Config\Services::pager();

        $url      = base_url('/apiBrand/getAll');
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $data['brand'] = json_decode($response->getBody());
          echo view('admin/tambah_hp', $data);
        }

    }

    public function tambahHp(){
      $pager    = \Config\Services::pager();
      $session  = \Config\Services::session();

      if(isset($_POST['submit'])){
        $pager          = \Config\Services::pager();
        $session        = \Config\Services::session();
        $id_brand       = $_POST['id_brand'];
        $nama_hp        = $_POST['nama_hp'];
        $tgl_rilis      = $_POST['tgl_rilis'];
        $ukuran_layar   = $_POST['ukuran_layar'];
        $sistem_operasi = $_POST['sistem_operasi'];
        $chipset        = $_POST['chipset'];
        $memori         = $_POST['memori'];
        $daya_baterai   = $_POST['daya_baterai'];
        $kamera         = $_POST['kamera'];
        $jaringan       = strtoupper($_POST['jaringan']);
        $harga          = preg_replace("/[^0-9]/", "", $_POST['harga']);
        $warna          = ucwords($_POST['warna']);

        if(empty($id_brand) OR empty($nama_hp) OR empty($tgl_rilis) OR empty($ukuran_layar) OR empty($sistem_operasi) OR empty($chipset)
        OR empty($memori) OR empty($daya_baterai) OR empty($kamera) OR empty($jaringan) OR empty($harga) OR empty($warna)){
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="width: 100%">Data tidak boleh kosong.</div>');
          return redirect()->route('admin/tambah_hp');
        }
        else{
          $validation = $this->validate([
            'foto_hp' => 'uploaded[foto_hp]|mime_in[foto_hp,image/jpg,image/jpeg,image/gif,image/png]'
          ]);

          if($validation == TRUE){
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
              $upload  = $this->request->getFile('foto_hp');
              $foto_hp = $upload->getName();

              $upload->move(WRITEPATH . '../public/assets/img/hp/');

              $url      = base_url('/apiHp/addOne/'.$id_brand.'/'.$nama_hp.'/'.$foto_hp.'/'.$tgl_rilis.'/'.$ukuran_layar.'/'.$sistem_operasi.'/'.
                          $chipset.'/'.$memori.'/'.$daya_baterai.'/'.$kamera.'/'.$jaringan.'/'.$harga.'/'.$warna);
              $curl     = service('curlrequest');
              $response = $curl->request('GET', $url, [
                "headers" => [
                  "Accept" => "application/json"
                ]
              ]);

              if($response->getStatusCode() == 201){
                $session->setFlashdata('message', '<div class="alert alert-success alert-dismissible fade show alert-dismissible fade show" role="alert">Hp berhasil ditambahkan.</div>');
                return redirect()->route('admin/daftar_hp');
              }
              else{
                $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert">Terjadi kesalahan.</div>');
                return redirect()->route('admin/daftar_hp');
              }
            }
          }
          else{
            $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="width: 100%">Data tidak boleh kosong.</div>');
            return redirect()->route('admin/tambah_hp');
          }
        }
      }
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

        $url      = base_url('/apiBrand/getAll');
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $data['brand'] = json_decode($response->getBody());
          echo view('admin/ubah_hp', $data);
        }
      }
    }

    public function ubahHp(){
      if(isset($_POST['submit'])){
        $pager          = \Config\Services::pager();
        $session        = \Config\Services::session();
        $id_hp          = $_POST['id_hp'];
        $id_brand       = $_POST['id_brand'];
        $nama_hp        = $_POST['nama_hp'];
        $tgl_rilis      = $_POST['tgl_rilis'];
        $ukuran_layar   = $_POST['ukuran_layar'];
        $sistem_operasi = $_POST['sistem_operasi'];
        $chipset        = $_POST['chipset'];
        $memori         = $_POST['memori'];
        $daya_baterai   = $_POST['daya_baterai'];
        $kamera         = $_POST['kamera'];
        $jaringan       = strtoupper($_POST['jaringan']);
        $harga          = preg_replace("/[^0-9]/", "", $_POST['harga']);
        $warna          = ucwords($_POST['warna']);

        if(empty($id_brand) OR empty($nama_hp) OR empty($tgl_rilis) OR empty($ukuran_layar) OR empty($sistem_operasi) OR empty($chipset)
        OR empty($memori) OR empty($daya_baterai) OR empty($kamera) OR empty($jaringan) OR empty($harga) OR empty($warna)){
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="width: 100%">Data tidak boleh kosong.</div>');
          return redirect()->route('admin.ubah_hp', [$id_hp]);
        }
        else{
          $validation = $this->validate([
            'foto_hp' => 'uploaded[foto_hp]|mime_in[foto_hp,image/jpg,image/jpeg,image/gif,image/png]'
          ]);

          $url      = base_url('/apiHp/getHp/'.$nama_hp);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $url      = base_url('/apiHp/getOne/'.$id_hp);
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            if($response->getStatusCode() == 200){
              $hp = json_decode($response->getBody());

              if($nama_hp == $hp->nama_hp){
                if($validation == TRUE){
                  $upload  = $this->request->getFile('foto_hp');
                  $foto_hp = $upload->getName();

                  $upload->move(WRITEPATH . '../public/assets/img/hp/');

                  $url      = base_url('/apiHp/updateOne/'.$id_hp.'/'.$id_brand.'/'.$nama_hp.'/'.$foto_hp.'/'.$tgl_rilis.'/'.$ukuran_layar.'/'.$sistem_operasi.'/'.
                              $chipset.'/'.$memori.'/'.$daya_baterai.'/'.$kamera.'/'.$jaringan.'/'.$harga.'/'.$warna);
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
                else{
                  $url      = base_url('/apiHp/getOne/'.$id_hp);
                  $curl     = service('curlrequest');
                  $response = $curl->request('GET', $url, [
                    "headers" => [
                      "Accept" => "application/json"
                    ]
                  ]);

                  if($response->getStatusCode() == 200){
                    $hp       = json_decode($response->getBody());
                    $foto_hp  = $hp->foto_hp;
                    $url      = base_url('/apiHp/updateOne/'.$id_hp.'/'.$id_brand.'/'.$nama_hp.'/'.$foto_hp.'/'.$tgl_rilis.'/'.$ukuran_layar.'/'.$sistem_operasi.'/'.
                                $chipset.'/'.$memori.'/'.$daya_baterai.'/'.$kamera.'/'.$jaringan.'/'.$harga.'/'.$warna);
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
              }
              else{
                $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="width: 100%">Hp sudah tersedia.</div>');
                return redirect()->route('admin.ubah_hp', [$id_hp]);
              }
            }
            else{
              $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="width: 100%">Hp sudah tersedia.</div>');
              return redirect()->route('admin.ubah_hp', [$id_hp]);
            }
          }
          else{
            if($validation == TRUE){
              $upload  = $this->request->getFile('foto_hp');
              $foto_hp = $upload->getName();

              $upload->move(WRITEPATH . '../public/assets/img/hp/');

              $url      = base_url('/apiHp/updateOne/'.$id_hp.'/'.$id_brand.'/'.$nama_hp.'/'.$foto_hp.'/'.$tgl_rilis.'/'.$ukuran_layar.'/'.$sistem_operasi.'/'.
                          $chipset.'/'.$memori.'/'.$daya_baterai.'/'.$kamera.'/'.$jaringan.'/'.$harga.'/'.$warna);
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
            else{
              $url      = base_url('/apiHp/getOne/'.$id_hp);
              $curl     = service('curlrequest');
              $response = $curl->request('GET', $url, [
                "headers" => [
                  "Accept" => "application/json"
                ]
              ]);

              if($response->getStatusCode() == 200){
                $hp       = json_decode($response->getBody());
                $foto_hp  = $hp->foto_hp;
                $url      = base_url('/apiHp/updateOne/'.$id_hp.'/'.$id_brand.'/'.$nama_hp.'/'.$foto_hp.'/'.$tgl_rilis.'/'.$ukuran_layar.'/'.$sistem_operasi.'/'.
                            $chipset.'/'.$memori.'/'.$daya_baterai.'/'.$kamera.'/'.$jaringan.'/'.$harga.'/'.$warna);
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
          }
        }
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
