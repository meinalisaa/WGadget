<?php
  namespace App\Models;

  use CodeIgniter\Model;

  class SearchModel extends Model {
    protected $table         = 'tabel_hp';
    protected $primaryKey    = 'id_hp';
    protected $allowedFields = ['id_brand','nama_hp','foto_hp'];

    public function get($search){
      return $this->db->table('tabel_hp')
      ->join('tabel_brand', 'tabel_brand.id_brand = tabel_hp.id_brand')
      ->like('nama_brand', $search)
      ->orLike('nama_hp', $search)
      ->get()->getResult();
    }

    public function add($data){
      return $this->db->table('tabel_pencarian')
      ->insert($data);
    }
  }
