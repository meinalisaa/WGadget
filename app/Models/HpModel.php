<?php
  namespace App\Models;

  use CodeIgniter\Model;

  class HpModel extends Model {
    protected $table         = 'tabel_hp';
    protected $primaryKey    = 'id_hp';
    protected $allowedFields = ['id_brand','nama_hp','foto_hp'];

    public function getAll(){
      $builder = $this->db->table('tabel_hp');
      $builder->join('tabel_brand', 'tabel_brand.id_brand = tabel_hp.id_brand');
      
      $query = $builder->get();
      return $query->getResult();
    }
  }
