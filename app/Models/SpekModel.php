<?php

namespace App\Models;
 
use CodeIgniter\Model;
 
class SpekModel extends Model {
    protected $table = 'tabel_spek';
    protected $primaryKey = 'id_spek';
    protected $allowedFields = ['id_hp','tgl_rilis','ukuran_layar','sistem_operasi','chipset','memori','daya_baterai','kamera','jaringan','harga','warna'];
}