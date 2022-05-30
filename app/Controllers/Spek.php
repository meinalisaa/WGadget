<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\SpekModel;

class Spek extends ResourceController
{
    use ResponseTrait;
    // GET list_spek
    public function index()
    {
        $model = new SpekModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // GET hp($id)
    public function show($id = null)
    {
        $model = new SpekModel();
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
        $model = new SpekModel();
        $data = [
            'id_hp'             => $this->request->getVar('id_hp'),
            'tgl_rilis'         => $this->request->getVar('tgl_rilis'),
            'ukuran_layar'      => $this->request->getVar('ukuran_layar'),
            'sistem_operasi'    => $this->request->getVar('sistem_operasi'),
            'chipset'           => $this->request->getVar('chipset'),
            'memori'            => $this->request->getVar('memori'),
            'daya_baterai'      => $this->request->getVar('daya_baterai'),
            'kamera'            => $this->request->getVar('kamera'),
            'jaringan'          => $this->request->getVar('jaringan'),
            'harga'             => $this->request->getVar('harga'),
            'warna'             => $this->request->getVar('warna')
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
        $model = new SpekModel();
        $json = $this->request->getJSON();
        if($json){
            $data = [
                'id_hp'             => $json->id_hp,
                'tgl_rilis'         => $json->tgl_rilis,
                'ukuran_layar'      => $json->ukuran_layar,
                'sistem_operasi'    => $json->sistem_operasi,
                'chipset'           => $json->chipset,
                'memori'            => $json->memori,
                'daya_baterai'      => $json->daya_baterai,
                'kamera'            => $json->kamera,
                'jaringan'          => $json->jaringan,
                'harga'             => $json->harga,
                'warna'             => $json->warna
            ];
        }else{
            $input = $this->request->getRawInput();
            $data = [
                'id_hp'             => $input['id_hp'],
                'tgl_rilis'         => $input['tgl_rilis'],
                'ukuran_layar'      => $input['ukuran_layar'],
                'sistem_operasi'    => $input['sistem_operasi'],
                'chipset'           => $input['chipset'],
                'memori'            => $input['memori'],
                'daya_baterai'      => $input['daya_baterai'],
                'kamera'            => $input['kamera'],
                'jaringan'          => $input['jaringan'],
                'harga'             => $input['harga'],
                'warna'             => $input['warna']
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
        $model = new SpekModel();
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