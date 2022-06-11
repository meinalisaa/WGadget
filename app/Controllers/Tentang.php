<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;

  class Tentang extends ResourceController{
    public function index(){
      $data['judul'] = 'WGadget | Tentang';
      echo view('pages/tentang', $data);
    }
  }
