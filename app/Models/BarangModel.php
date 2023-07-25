<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama_barang', 'qty', 'harga_beli', 'harga_jual'];

    // public function getBarang()
    // {
    //     return $this->findAll();
    // }

    // public function getBarangId($id = false)
    // {
    //     if ($id === false) {
    //         return $this->findAll();
    //     } else {
    //         return $this->getWhere(['id_barang' => $id]);
    //     }
    // }
}
