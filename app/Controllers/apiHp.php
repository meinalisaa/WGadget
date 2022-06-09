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

    public function addOne($data = null){
      $model = new HpModel();
      $id    = $model->getLast();
      $id_hp = $id['id_hp'] + 1;

      if(empty($data)){
        $id_brand       = $this->request->getVar('id_brand');
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

        if(empty($id_brand) OR empty($nama_hp) OR empty($foto_hp) OR empty($tgl_rilis) OR empty($ukuran_layar) OR empty($sistem_operasi) OR empty($chipset)
        OR empty($memori) OR empty($daya_baterai) OR empty($kamera) OR empty($jaringan) OR empty($harga) OR empty($warna)){
          return $this->response->setStatusCode(400, 'Data tidak boleh kosong.');
        }
        else{
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
      }
      else{
        $id_brand       = $data->id_brand;
        $nama_hp        = ucwords($data->nama_hp);
        $foto_hp        = strtolower($data->foto_hp);
        $tgl_rilis      = $data->tgl_rilis;
        $ukuran_layar   = $data->ukuran_layar;
        $sistem_operasi = $data->sistem_operasi;
        $chipset        = $data->chipset;
        $memori         = $data->memori;
        $daya_baterai   = $data->daya_baterai;
        $kamera         = $data->kamera;
        $jaringan       = strtoupper($data->jaringan);
        $harga          = $data->harga;
        $warna          = ucwords($data->warna);

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

    public function updateOne($id_hp, $data = 0){
      $model = new HpModel();
      $url      = base_url('/apiHp/getOne/'.$id_hp);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        if(empty($nama_brand)){
          $json  = $this->request->getJSON();
          $input = $this->request->getRawInput();

          if($json){
            $id_brand       = $json->id_brand;
            $nama_hp        = ucwords($json->nama_hp);
            $foto_hp        = strtolower($json->foto_hp);
            $tgl_rilis      = $json->tgl_rilis;
            $ukuran_layar   = $json->ukuran_layar;
            $sistem_operasi = $json->sistem_operasi;
            $chipset        = $json->chipset;
            $memori         = $json->memori;
            $daya_baterai   = $json->daya_baterai;
            $kamera         = $json->kamera;
            $jaringan       = strtoupper($json->jaringan);
            $harga          = $json->harga;
            $warna          = ucwords($json->warna);

            if(empty($id_brand) OR empty($nama_hp) OR empty($foto_hp) OR empty($tgl_rilis) OR empty($ukuran_layar) OR empty($sistem_operasi) OR empty($chipset)
            OR empty($memori) OR empty($daya_baterai) OR empty($kamera) OR empty($jaringan) OR empty($harga) OR empty($warna)){
              return $this->response->setStatusCode(400, 'Data tidak boleh kosong.');
            }
            else{
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
            }
          }
          else{
            $id_brand       = $input['id_brand'];
            $nama_hp        = ucwords($input['nama_hp']);
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
            }
          }
        }
        else{
          $id_brand       = $data->id_brand;
          $nama_hp        = ucwords($data->nama_hp);
          $foto_hp        = strtolower($data->foto_hp);
          $tgl_rilis      = $data->tgl_rilis;
          $ukuran_layar   = $data->ukuran_layar;
          $sistem_operasi = $data->sistem_operasi;
          $chipset        = $data->chipset;
          $memori         = $data->memori;
          $daya_baterai   = $data->daya_baterai;
          $kamera         = $data->kamera;
          $jaringan       = strtoupper($data->jaringan);
          $harga          = $data->harga;
          $warna          = ucwords($data->warna);

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
        return $this->response->setStatusCode(204, 'Hp dengan id '.$id_hp.' tidak ditemukan.');
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
        $model->deleteSpek($id_hp);
        $model->deleteHp($id_hp);
        return $this->response->setStatusCode(200, 'Hp berhasil dihapus.');
      }
      else{
        return $this->response->setStatusCode(204, 'Hp dengan id '.$id_hp.' tidak ditemukan.');
      }
    }
  }
