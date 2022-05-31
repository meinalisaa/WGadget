<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\HpModel;

  class getHp extends ResourceController{
    public function index(){
      $model      = new HpModel();
      $data['db'] = $model->getAll();
      return $this->respond($data['db'], 200);
    }
  }
