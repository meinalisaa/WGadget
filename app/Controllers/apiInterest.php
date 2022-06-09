<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\InterestModel;

  class apiInterest extends ResourceController{
    use ResponseTrait;

    public function getAll(){
      $model = new InterestModel();
      $data  = $model->getAll();

      if($data){
        return $this->respond($data, 200, 'Daftar hp yang paling diminati berhasil ditampilkan.');
      }
      else{
        return $this->response->setStatusCode(204, 'Belum ada data yang tersedia.');
      }
    }
  }
