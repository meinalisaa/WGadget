<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\SearchModel;

  class Search extends ResourceController{
    use ResponseTrait;

    public function index(){
      if(isset($_POST['submit'])){
        $cari = $this->request->getVar('cari');

        if(!empty($cari)){
          $pager    = \Config\Services::pager();
          $url      = base_url('/search/getSearch/'.$cari);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $data['cari']     = ucfirst($cari);
            $data['judul']    = 'WGadget | Hasil Pencarian '.$data['cari'];
            $data['database'] = json_decode($response->getBody());
            echo view('pages/hasil_pencarian', $data);
          }
        }
        else{
          return redirect()->route('/');
        }
      }
    }

    public function getSearch($cari){
      $model      = new SearchModel();
      $data['db'] = $model->get($cari);
      return $this->respond($data['db'], 200, 'Data Pencarian berhasil ditampilkan.');
    }
  }
