<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;


  class Admin extends ResourceController{
    use ResponseTrait;

    public function daftar_brand(){
      $data['judul'] = 'WGadget | Daftar Brand';
      $url = base_url('/admin/getBrand');

      $curl = service('curlrequest');
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

    public function getBrand(){
      $model      = new BrandModel();
      $data['db'] = $model->findAll();
      return $this->respond($data['db'], 200, 'Daftar Brand berhasil ditampilkan.');
    }

    public function addBrand(){
      $model = new BrandModel();
      $data = [
        'nama_brand' => $this->request->getVar('nama_brand')
      ];

      $model->insert($data);
      $response = [
        'status'   => 201,
        'error'    => null,
        'messages' => 'Brand berhasil ditambahkan.'
      ];

      return $this->respondCreated($response);
    }

    public function deleteBrand($id = null){
      $model = new BrandModel();
      $data  = $model->find($id);

      if($data){
        $model->delete($id);
        $response = [
          'status'   => 200,
          'error'    => null,
          'messages' => 'Brand berhasil dihapus.'
        ];

        return $this->respondDeleted($response);
      }
      else{
        return $this->failNotFound('Brand dengan id '.$id.' tidak ditemukan.', 401);
      }
    }
  }
