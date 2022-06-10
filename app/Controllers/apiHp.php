<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\HpModel;

  class apiHp extends ResourceController{
    use ResponseTrait;

    public function getAll(){
      $model = new HpModel();
      $data  = $model->getAll();
      return $this->respond($data, 200, 'Daftar hp berhasil ditampilkan.');
    }

    public function getOne($id_hp){
      $model = new HpModel();
      $data  = $model->getOne($id_hp);

      if($data){
        return $this->respond($data, 200, 'Hp dengan id '.$id_hp.' berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Hp dengan id '.$id_hp.' tidak ditemukan.');
      }
    }

    public function getHp($nama_hp){
      $model   = new HpModel();
      $nama_hp = ucwords($nama_hp);
      $data    = $model->getHp($nama_hp);

      if($data){
        return $this->respond($data, 200, 'Hp dengan nama '.$nama_hp.' berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Hp dengan nama '.$nama_hp.' tidak ditemukan.');
      }
    }

    public function getBrand($nama_brand){
      $model      = new HpModel();
      $nama_brand = ucwords($nama_brand);
      $data       = $model->getBrand($nama_brand);

      if($data){
        return $this->respond($data, 200, 'Daftar hp dengan brand '.$nama_brand.' berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Tidak ada hp dengan brand '.$nama_brand.'.');
      }
    }

    public function addOne($id_brand = null, $nama_hp = null, $foto_hp = null, $tgl_rilis = null, $ukuran_layar = null, $sistem_operasi = null,
    $chipset = null, $memori = null, $daya_baterai = null, $kamera = null, $jaringan = null, $harga = null, $warna = null){
      $model = new HpModel();
      $id    = $model->getLast();
      $id_hp = $id['id_hp'] + 1;

      if(empty($id_brand) AND empty($nama_hp) AND empty($foto_hp) AND empty($tgl_rilis) AND empty($ukuran_layar) AND empty($sistem_operasi) AND empty($chipset)
      AND empty($memori) AND empty($daya_baterai) AND empty($kamera) AND empty($jaringan) AND empty($harga) AND empty($warna)){
        $id_brand       = $this->request->getVar('id_brand');
        $nama_hp        = $this->request->getVar('nama_hp');
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

        if(empty($id_brand) OR empty($nama_hp) OR empty($foto_hp) OR empty($tgl_rilis) OR empty($ukuran_layar) OR empty($sistem_operasi) OR empty($chipset)
        OR empty($memori) OR empty($daya_baterai) OR empty($kamera) OR empty($jaringan) OR empty($harga) OR empty($warna)){
          return $this->response->setStatusCode(400, 'Data tidak boleh kosong.');
        }
        else{
          $url      = base_url('/apiBrand/getOne/'.$id_brand);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $url      = base_url('/apiHp/getHp/'.$nama_hp);
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            if($response->getStatusCode() == 200){
              return $this->respond(json_decode($response->getBody()), 409, 'Hp sudah tersedia.');
            }
            else{
              $data1 = [
                'id_hp'    => $id_hp,
                'id_brand' => $id_brand,
                'nama_hp'  => $nama_hp,
                'foto_hp'  => $foto_hp
              ];

              $data2 = [
                'id_hp'          => $id_hp,
                'id_brand'       => $id_brand,
                'tgl_rilis'      => $tgl_rilis,
                'ukuran_layar'   => $ukuran_layar,
                'sistem_operasi' => $sistem_operasi,
                'chipset'        => $chipset,
                'memori'         => $memori,
                'daya_baterai'   => $daya_baterai,
                'kamera'         => $kamera,
                'jaringan'       => $jaringan,
                'harga'          => $harga,
                'warna'          => $warna
              ];

              $model->addHp($data1);
              $model->addSpek($data2);
              return $this->respond($data1, 201, 'Hp berhasil ditambahkan.');
            }
          }
          else{
            return $this->response->setStatusCode(204, 'Brand dengan id '.$id_brand.' tidak ditemukan.');
          }
        }
      }
      else{
        $data1 = [
          'id_hp'    => $id_hp,
          'id_brand' => $id_brand,
          'nama_hp'  => $nama_hp,
          'foto_hp'  => $foto_hp
        ];

        $data2 = [
          'id_hp'          => $id_hp,
          'id_brand'       => $id_brand,
          'tgl_rilis'      => $tgl_rilis,
          'ukuran_layar'   => $ukuran_layar,
          'sistem_operasi' => $sistem_operasi,
          'chipset'        => $chipset,
          'memori'         => $memori,
          'daya_baterai'   => $daya_baterai,
          'kamera'         => $kamera,
          'jaringan'       => $jaringan,
          'harga'          => $harga,
          'warna'          => $warna
        ];

        $model->addHp($data1);
        $model->addSpek($data2);
        return $this->respond($data1, 201, 'Hp berhasil ditambahkan.');
      }
    }

    public function updateOne($id_hp, $id_brand = null, $nama_hp = null, $foto_hp = null, $tgl_rilis = null, $ukuran_layar = null, $sistem_operasi = null,
    $chipset = null, $memori = null, $daya_baterai = null, $kamera = null, $jaringan = null, $harga = null, $warna = null){
      $model = new HpModel();

      if(empty($id_brand) AND empty($nama_hp) AND empty($foto_hp) AND empty($tgl_rilis) AND empty($ukuran_layar) AND empty($sistem_operasi) AND empty($chipset)
      AND empty($memori) AND empty($daya_baterai) AND empty($kamera) AND empty($jaringan) AND empty($harga) AND empty($warna)){
        $url      = base_url('/apiHp/getOne/'.$id_hp);
        $curl     = service('curlrequest');
        $response = $curl->request('GET', $url, [
          "headers" => [
            "Accept" => "application/json"
          ]
        ]);

        if($response->getStatusCode() == 200){
          $input          = $this->request->getRawInput();
          $id_brand       = $input['id_brand'];
          $nama_hp        = $input['nama_hp'];
          $foto_hp        = strtolower($input['foto_hp']);
          $tgl_rilis      = $input['tgl_rilis'];
          $ukuran_layar   = $input['ukuran_layar'];
          $sistem_operasi = $input['sistem_operasi'];
          $chipset        = $input['chipset'];
          $memori         = $input['memori'];
          $daya_baterai   = $input['daya_baterai'];
          $kamera         = $input['kamera'];
          $jaringan       = strtoupper($input['jaringan']);
          $harga          = $input['harga'];
          $warna          = ucwords($input['warna']);

          if(empty($id_brand) OR empty($nama_hp) OR empty($foto_hp) OR empty($tgl_rilis) OR empty($ukuran_layar) OR empty($sistem_operasi) OR empty($chipset)
          OR empty($memori) OR empty($daya_baterai) OR empty($kamera) OR empty($jaringan) OR empty($harga) OR empty($warna)){
            return $this->response->setStatusCode(400, 'Data tidak boleh kosong.');
          }
          else{
            $url      = base_url('/apiBrand/getOne/'.$id_brand);
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            if($response->getStatusCode() == 200){
              $url      = base_url('/apiHp/getHp/'.$nama_hp);
              $curl     = service('curlrequest');
              $response = $curl->request('GET', $url, [
                "headers" => [
                  "Accept" => "application/json"
                ]
              ]);

              if($response->getStatusCode() == 200){
                return $this->respond(json_decode($response->getBody()), 409, 'Hp sudah tersedia.');
              }
              else{
                $data1 = [
                  'id_brand' => $id_brand,
                  'nama_hp'  => $nama_hp,
                  'foto_hp'  => $foto_hp
                ];

                $data2 = [
                  'id_brand'       => $id_brand,
                  'tgl_rilis'      => $tgl_rilis,
                  'ukuran_layar'   => $ukuran_layar,
                  'sistem_operasi' => $sistem_operasi,
                  'chipset'        => $chipset,
                  'memori'         => $memori,
                  'daya_baterai'   => $daya_baterai,
                  'kamera'         => $kamera,
                  'jaringan'       => $jaringan,
                  'harga'          => $harga,
                  'warna'          => $warna
                ];
              }

              $model->updateHp($id_hp, $data1);
              $model->updateSpek($id_hp, $data2);
              return $this->respond($data1, 200, 'Hp berhasil diperbarui.');
            }
            else{
              return $this->response->setStatusCode(204, 'Brand dengan id '.$id_brand.' tidak ditemukan.');
            }
          }
        }
        else{
          return $this->response->setStatusCode(204, 'Hp dengan id '.$id_hp.' tidak ditemukan.');
        }
      }
      else{
        $data1 = [
          'id_brand' => $id_brand,
          'nama_hp'  => $nama_hp,
          'foto_hp'  => $foto_hp
        ];

        $data2 = [
          'id_brand'       => $id_brand,
          'tgl_rilis'      => $tgl_rilis,
          'ukuran_layar'   => $ukuran_layar,
          'sistem_operasi' => $sistem_operasi,
          'chipset'        => $chipset,
          'memori'         => $memori,
          'daya_baterai'   => $daya_baterai,
          'kamera'         => $kamera,
          'jaringan'       => $jaringan,
          'harga'          => $harga,
          'warna'          => $warna
        ];

        $model->updateHp($id_hp, $data1);
        $model->updateSpek($id_hp, $data2);
        return $this->respond($data1, 200, 'Hp berhasil diperbarui.');
      }
    }

    public function deleteOne($id_hp){
      $model = new HpModel();
      $url      = base_url('/apiHp/getOne/'.$id_hp);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $model->deleteSearch($id_hp);
        $model->deleteSpek($id_hp);
        $model->deleteHp($id_hp);
        return $this->response->setStatusCode(200, 'Hp berhasil dihapus.');
      }
      else{
        return $this->response->setStatusCode(204, 'Hp dengan id '.$id_hp.' tidak ditemukan.');
      }
    }
  }
