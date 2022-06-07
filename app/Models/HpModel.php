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

    public function getOne($id){
      return $this->db->table('tabel_spek')
      ->join('tabel_hp', 'tabel_hp.id_hp = tabel_spek.id_hp')
      ->join('tabel_brand', 'tabel_brand.id_brand = tabel_spek.id_brand')
      ->where('tabel_spek.id_hp', $id)
      ->get()->getRowArray();
    }
  }