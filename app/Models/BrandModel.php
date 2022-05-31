<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class BrandModel extends Model {
    protected $table = 'tabel_brand';
    protected $primaryKey = 'id_brand';
    protected $allowedFields = ['nama_brand'];

    public function getAll(){
        $builder = $this->db->table('tabel_hp');
        
        $query = $builder->get();
        return $query->getResult();
      }
}