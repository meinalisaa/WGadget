<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\TopModel;
 
class Top extends ResourceController
{
    use ResponseTrait;
    // GET top_interest
    public function index()
    {
        $model = new TopModel();
        $data = $model->getTopHp();
        return $this->respond($data, 200);
    }
 
    // GET pencarian($id)
    // public function show($id = null)
    // {
    //     $model = new TopModel();
    //     $data = $model->find($id);
    //     if($data){
    //         return $this->respond($data, 200);
    //     }else{
    //         return $this->failNotFound('No Data Found with id '.$id, 404);
    //     }
    // }
 
    // POST top_interest
    public function create()
    {
        $model = new TopModel();
        $data = [
            'id_hp' => $this->request->getVar('id_hp')
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
 
}