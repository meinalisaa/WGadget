<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;

  class Search extends ResourceController{
    use ResponseTrait;

    public function index(){
      if(isset($_POST['submit'])){
        $cari = $this->request->getVar('cari');

        if(!empty($cari)){
          $pager    = \Config\Services::pager();
          $url      = base_url('/apiSearch/getSearch/'.$cari);
          $curl     = service('curlrequest');
          $response = $curl->request('GET', $url, [
            "headers" => [
              "Accept" => "application/json"
            ]
          ]);

          if($response->getStatusCode() == 200){
            $data['cari']     = ucfirst($cari);
            $data['judul']    = 'WGadget | Hasil Pencarian';
            $data['database'] = json_decode($response->getBody());
            echo view('pages/hasil_pencarian', $data);
          }
        }
        else{
          return redirect()->route('/');
        }
      }
    }
  }
