<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class TopModel extends Model {
    protected $table = 'tabel_pencarian';
    protected $primaryKey = 'id_pencarian';
    protected $allowedFields = ['id_hp'];

    public function getTopHp() {
    	return $this->db->table('tabel_pencarian')
    	->join('tabel_hp', 'tabel_hp.id_hp=tabel_pencarian.id_hp')
    	->get()->getResultArray();
    }
}