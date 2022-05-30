<?php namespace App\Controllers;
 
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\BrandModel;
 
class Brand extends ResourceController
{
    use ResponseTrait;
    // GET list_brand
    public function index()
    {
        $model = new BrandModel();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
 
    // GET brand($id) 
    public function show($id = null)
    {
        $model = new BrandModel();
        $data = $model->find($id);
        if($data){
            return $this->respond($data, 200);
        }else{
            return $this->failNotFound('No Data Found with id '.$id, 404);
        }
    }
 
    // POST brand
    public function create()
    {
        $model = new BrandModel();
        $data = [
            'nama_brand' => $this->request->getVar('nama_brand')
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
 
    // PUT brand($id)
    public function update($id = null)
    {
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
 
    // DELETE brand($id)
    public function delete($id = null)
    {
        $model = new BrandModel();
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