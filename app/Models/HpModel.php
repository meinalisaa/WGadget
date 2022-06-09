<?php
  namespace App\Models;

  use CodeIgniter\Model;

  class HpModel extends Model{
    protected $table         = 'tabel_spek';
    protected $primaryKey    = 'id_spek';
    protected $allowedFields = ['id_hp', 'id_brand', 'tgl_rilis', 'ukuran_layar', 'sistem_operasi', 'chipset', 'memori', 'daya_baterai', 'kamera', 'jaringan', 'harga', 'warna'];

    public function getAll(){
      return $this->db->table('tabel_spek')
      ->join('tabel_hp', 'tabel_hp.id_hp = tabel_spek.id_hp')
      ->join('tabel_brand', 'tabel_brand.id_brand = tabel_spek.id_brand')
      ->get()->getResult();
    }

    public function getOne($id_hp){
      return $this->db->table('tabel_spek')
      ->join('tabel_hp', 'tabel_hp.id_hp = tabel_spek.id_hp')
      ->join('tabel_brand', 'tabel_brand.id_brand = tabel_spek.id_brand')
      ->where('tabel_spek.id_hp', $id_hp)
      ->get()->getRowArray();
    }

    public function getHp($nama_hp){
      return $this->db->table('tabel_hp')
      ->where('nama_hp', $nama_hp)
      ->get()->getRowArray();
    }

    public function getLast(){
      return $this->db->table('tabel_hp')
      ->orderBy('id_hp', 'DESC')
      ->limit(1)
      ->get()->getRowArray();
    }

    public function addHp($data){
      return $this->db->table('tabel_hp')
      ->insert($data);
    }

    public function addSpek($data){
      return $this->db->table('tabel_spek')
      ->insert($data);
    }

    public function updateHp($id_hp, $data){
      return $this->db->table('tabel_hp')
      ->where('id_hp', $id_hp)
      ->update($data);
    }

    public function updateSpek($id_hp, $data){
      return $this->db->table('tabel_spek')
      ->where('id_hp', $id_hp)
      ->update($data);
    }

    public function deleteHp($id_hp){
      return $this->db->table('tabel_hp')
      ->where('id_hp', $id_hp)
      ->delete();
    }

    public function deleteSpek($id_hp){
      return $this->db->table('tabel_spek')
      ->where('id_hp', $id_hp)
      ->delete();
    }
  }
