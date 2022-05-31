<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\HpModel;

class Hp extends ResourceController
{
    use ResponseTrait;
    // GET list_hp
    public function index()
    {
        $model = new HpModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    // GET hp($id)
    public function show($id = null)
    {
        $model = new HpModel();
        $data = $model->find($id);
        if($data){
            return $this->respond($data, 200);
        }else{
            return $this->failNotFound('No Data Found with id '.$id, 404);
        }
    }

    // POST hp
    public function create()
    {
        $model = new HpModel();
        $data = [
            'id_brand' => $this->request->getVar('id_brand'),
            'nama_hp' => $this->request->getVar('nama_hp'),
            'foto_hp' => $this->request->getVar('foto_hp')
        ];

        $model->insert($data);
        $response = [
            'status'   => 201,
            'error'    => null,
            'messages' => [
                'success' => 'Data Saved'
            ]
        ];

        return $this->respondCreated($data, 201);
    }

    // PUT hp($id)
    public function update($id = null)
    {
        $model = new HpModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'id_brand' => $json->id_brand,
                'nama_hp' => $json->nama_hp,
                'foto_hp' => $json->foto_hp
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'id_brand' => $input['id_brand'],
                'nama_hp' => $input['nama_hp'],
                'foto_hp' => $input['foto_hp']
            ];
        }




        // Insert to Database
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

    // DELETE hp($id)
    public function delete($id = null)
    {
        $model = new HpModel();
        $data = $model->find($id);
        if($data){
            $model->delete($id);
            $response = [
                'status'   => 200,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Deleted'
                ]
            ];

            return $this->respondDeleted($response);
        }else{
            return $this->failNotFound('No Data Found with id '.$id);
        }

    }

}
