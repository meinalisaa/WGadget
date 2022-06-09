<?php
  namespace App\Models;

  use CodeIgniter\Model;

  class BrandModel extends Model{
    protected $table         = 'tabel_brand';
    protected $primaryKey    = 'id_brand';
    protected $allowedFields = ['nama_brand'];

    public function getAll(){
      return $this->db->table('tabel_brand')
      ->get()->getResult();
    }

    public function getOne($id_brand){
      return $this->db->table('tabel_brand')
      ->where('id_brand', $id_brand)
      ->get()->getRowArray();
    }

    public function getBrand($nama_brand){
      return $this->db->table('tabel_brand')
      ->where('nama_brand', $nama_brand)
      ->get()->getRowArray();
    }

    public function getLast(){
      return $this->db->table('tabel_brand')
      ->orderBy('id_brand', 'DESC')
      ->limit(1)
      ->get()->getRowArray();
    }

    public function addOne($data){
      return $this->db->table('tabel_brand')
      ->insert($data);
    }

    public function updateOne($id_brand, $data){
      return $this->db->table('tabel_brand')
      ->where('id_brand', $id_brand)
      ->update($data);
    }

    public function deleteBrand($id_brand){
      return $this->db->table('tabel_brand')
      ->where('id_brand', $id_brand)
      ->delete();
    }

    public function deleteHp($id_brand){
      return $this->db->table('tabel_hp')
      ->where('id_brand', $id_brand)
      ->delete();
    }

    public function deleteSpek($id_brand){
      return $this->db->table('tabel_spek')
      ->where('id_brand', $id_brand)
      ->delete();
    }
  }
