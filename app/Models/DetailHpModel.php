<?php namespace App\Models;

use CodeIgniter\Model;

class DetailHpModel extends Model {
    protected $table = 'tabel_hp';
    protected $primaryKey = 'id_hp';
    protected $allowedFields = ['id_spek'];

    public function getDetailHp() {
    	return $this->db->table('tabel_hp')
    	->join('tabel_spek', 'tabel_spek.id_hp=tabel_hp.id_hp')
    	->get()->getResultArray();
    }
}
