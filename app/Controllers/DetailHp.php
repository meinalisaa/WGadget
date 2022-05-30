<?php namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DetailHpModel;

class DetailHp extends ResourceController
{
//Detail hp
public function index()
{
    $model = new DetailHpModel();
    $data = $model->getDetailHp();
    return $this->respond($data, 200);
}

}

?>
