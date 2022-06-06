<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\HpModel;

  class PerbandinganHp extends ResourceController{
    use ResponseTrait;

    public function index(){
      $data['judul']    = 'WGadget | Perbandingan Hp';
      $model            = new HpModel();
      $data['database'] = $model->getAll();

      echo view('pages/perbandingan_hp', $data);
    }

    public function compare(){
      if(isset($_POST['submit'])){
        $hp_1 = $this->request->getVar('hp_1');
        $hp_2 = $this->request->getVar('hp_2');

        if($hp_1 == $hp_2){
          $data['judul']    = 'WGadget | Perbandingan Hp';
          $model            = new HpModel();
          $data['database'] = $model->getAll();

          echo view('pages/hasil_perbandingan', $data);
        }
      }
    }

    public function hasil_perbandingan(){
      $data['judul'] = 'WGadget | Perbandingan Hp';
      echo view('pages/hasil_perbandingan');
    }
  }
