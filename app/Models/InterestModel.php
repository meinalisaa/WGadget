<?php
  namespace App\Models;

  use CodeIgniter\Model;

  class InterestModel extends Model{
    protected $table         = 'tabel_pencarian';
    protected $primaryKey    = 'id_pencarian';
    protected $allowedFields = ['id_hp', 'id_brand'];

    public function getAll(){
      return $this->db->table('tabel_pencarian')
      ->select('nama_hp, nama_brand, foto_hp')
      ->join('tabel_hp', 'tabel_hp.id_hp = tabel_pencarian.id_hp')
      ->join('tabel_brand', 'tabel_brand.id_brand = tabel_pencarian.id_brand')
      ->selectCount('tabel_pencarian.id_hp', 'total')
      ->groupBy('tabel_pencarian.id_hp')
      ->orderBy('total', 'DESC')
      ->limit(18)
      ->get()->getResult();
    }
  }
