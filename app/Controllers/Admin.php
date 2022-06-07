<?php
  namespace App\Controllers;

  use CodeIgniter\RESTful\ResourceController;
  use CodeIgniter\API\ResponseTrait;
  use App\Models\BrandModel;
  use App\Models\HpModel;
  use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

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

    public function tambahBrand(){
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

      // return redirect()->route('admin/daftar_brand');
      return $this->respondCreated($response);
    }

    public function ubahBrand($id = null){
      $model = new BrandModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'nama_brand' => $json->nama_brand
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'nama_brand' => $input['nama_brand']
            ];
        }

        $model->update($id, $data);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => 'Data Updated'
            ]
        ];

        return $this->respond($response);
    }

    public function hapusBrand($id = null){
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

    public function daftar_hp(){
      $data['judul'] = 'WGadget | Daftar HP';
      $url = base_url('/admin/getHp');

      $curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('admin/daftar_hp', $data);
      }
    }

    public function getHp(){
      $model      = new HpModel();
      $data['db'] = $model->getAll();
      return $this->respond($data['db'], 200, 'Daftar hp berhasil ditampilkan.');
    }

    public function detail_hp($id = null){
      $data['judul'] = 'WGadget | Detail HP';
      $pager    = \Config\Services::pager();
      $url = base_url('/admin/getDetailHp/'.$id);
      $curl = service('curlrequest');
      $response = $curl->request('GET', $url, [
        "headers" => [
          "Accept" => "application/json"
        ]
      ]);

      if($response->getStatusCode() == 200){
        $data['database'] = json_decode($response->getBody());
        echo view('admin/detail_hp', $data);
      }
    }

    public function getDetailHp($hp){
      $model            = new HpModel();
      $data['hp']       = $model->getOne($hp);
      return $this->respond($data['hp'], 200, 'Data hp dengan id '.$hp.' berhasil ditampilkan.');
    }
  }
