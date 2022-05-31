<?php
  namespace App\Controllers;

  class Beranda extends BaseController{
    public function index(){
      $data['judul'] = 'WGadget';
      $url = base_url('/getHp');

      $curl = curl_init($url);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $response = curl_exec($curl);
      curl_close($curl);

      $data['database'] = json_decode($response);
      echo view('pages/beranda', $data);

      /*$curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
  			"headers" => [
  				"Accept" => "application/json"
  			]
  		]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('pages\beranda', $data);
      }*/
    }
  }
