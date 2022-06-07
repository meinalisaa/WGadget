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

        if($hp_1 == null){
          $session = \Config\Services::session();
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="font-family: Arial">Anda belum memilih Hp.</div>');

		      return redirect()->to('/perbandingan_hp');
        }
        elseif($hp_2 == null){
          $session = \Config\Services::session();
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="font-family: Arial">Anda belum memilih Hp.</div>');

		      return redirect()->to('/perbandingan_hp');
        }
        elseif($hp_1 == $hp_2){
          $session = \Config\Services::session();
          $session->setFlashdata('message', '<div class="alert alert-danger alert-dismissible fade show alert-dismissible fade show" role="alert" style="font-family: Arial">Hp yang dibandingkan sama. Harap memilih Hp yang berbeda.</div>');

		      return redirect()->to('/perbandingan_hp');
        }
        else{
          return redirect()->to('/perbandinganhp/hasil_perbandingan/'.$hp_1.'/'.$hp_2);
        }
      }
    }

    public function hasil_perbandingan($hp_1, $hp_2){
      $data['judul']    = 'WGadget | Perbandingan Hp';
      $model            = new HpModel();
      $data['database'] = $model->getAll();
      $data['hp_1']     = $model->getOne($hp_1);
      $data['hp_2']     = $model->getOne($hp_2);

      echo view('pages/hasil_perbandingan', $data);
    }
  }
