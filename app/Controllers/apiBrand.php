<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;

  class apiBrand extends ResourceController{
    use ResponseTrait;

    public function getAll(){
      $model = new BrandModel();
      $data  = $model->getAll();
      return $this->respond($data, 200, 'Daftar brand berhasil ditampilkan.');
    }

    public function getOne($id_brand){
      $model = new BrandModel();
      $data  = $model->getOne($id_brand);

      if($data){
        return $this->respond($data, 200, 'Brand dengan id '.$id_brand.' berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Brand dengan id '.$id_brand.' tidak ditemukan.');
      }
    }

    public function getBrand($nama_brand){
      $model      = new BrandModel();
      $nama_brand = ucwords($nama_brand);
      $data       = $model->getBrand($nama_brand);

      if($data){
        return $this->respond($data, 200, 'Brand dengan nama '.$nama_brand.' berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Brand dengan nama '.$nama_brand.' tidak ditemukan.');
      }
    }

    public function addOne($nama_brand = null){
      $model    = new BrandModel();
      $id       = $model->getLast();
      $id_brand = $id['id_brand'] + 1;

      if(empty($nama_brand)){
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
            return $this->respond(json_decode($response->getBody()), 409, 'Brand sudah tersedia.');
          }
          else{
            $data = [
              'id_brand'   => $id_brand,
              'nama_brand' => $nama_brand
            ];
            $model->addOne($data);
            return $this->respond($data, 201, 'Brand berhasil ditambahkan.');
          }
        }
        else{
          return $this->response->setStatusCode(400, 'Nama brand tidak boleh kosong.');
        }
      }
      else{
        $data = [
          'id_brand'   => $id_brand,
          'nama_brand' => $nama_brand
        ];
        $model->addOne($data);
        return $this->respond($data, 201, 'Brand berhasil ditambahkan.');
      }
    }

    public function updateOne($id_brand = null){
      $model    = new BrandModel();
      $url      = base_url('/apiBrand/getOne/'.$id_brand);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $json  = $this->request->getJSON();
        $input = $this->request->getRawInput();

        if($json){
          $nama_brand = ucwords($json->nama_brand);

          if(!empty($nama_brand)){
            $url      = base_url('/apiBrand/getBrand/'.$nama_brand);
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            if($response->getStatusCode() == 200){
              return $this->respond(json_decode($response->getBody()), 409, 'Brand sudah tersedia.');
            }
            else{
              $data = [ 'nama_brand' => $nama_brand ];
            }
          }
          else{
            return $this->response->setStatusCode(400, 'Nama brand tidak boleh kosong.');
          }
        }
        else{
          $nama_brand = ucwords($input['nama_brand']);

          if(!empty($nama_brand)){
            $url      = base_url('/apiBrand/getBrand/'.$nama_brand);
            $curl     = service('curlrequest');
            $response = $curl->request('GET', $url, [
              "headers" => [
                "Accept" => "application/json"
              ]
            ]);

            if($response->getStatusCode() == 200){
              return $this->respond(json_decode($response->getBody()), 409, 'Brand sudah tersedia.');
            }
            else{
              $data  = [ 'nama_brand' => $nama_brand ];
            }
          }
          else{
            return $this->response->setStatusCode(400, 'Nama brand tidak boleh kosong.');
          }

          $model->updateOne($id_brand, $data);
          return $this->respond($data, 200, 'Brand berhasil diperbarui.');
        }
      }
      else{
        return $this->response->setStatusCode(204, 'Brand dengan id '.$id_brand.' tidak ditemukan.');
      }
    }

    public function deleteOne($id_brand = null){
      $model    = new BrandModel();
      $url      = base_url('/apiBrand/getOne/'.$id_brand);
      $curl     = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $model->deleteOne($id_brand);
        return $this->response->setStatusCode(200, 'Brand berhasil dihapus.');
      }
      else{
        return $this->response->setStatusCode(204, 'Brand dengan id '.$id_brand.' tidak ditemukan.');
      }
    }
  }
