<?php namespace App\Models;
 
use CodeIgniter\Model;
 
class HpModel extends Model {
    protected $table = 'tabel_hp';
    protected $primaryKey = 'id_hp';
    protected $allowedFields = ['id_brand','nama_hp','foto_hp'];
}