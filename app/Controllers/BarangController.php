<?php

namespace App\Controllers;

use App\Models\BarangModel;
use CodeIgniter\RESTful\ResourceController;

class BarangController extends ResourceController
{

    protected $format = 'json';
    protected $modelName = 'App\Models\BarangModel';

 

    public function index()
    {
        $data = [
            'title'   => 'Data Barang',
            'message' => 'success',
            'data_barang' => $this->model->findAll()
        ];
        // dd($data);
        return $this->respond($data, 200);
        echo view('header_view', $data);
        echo view('barang_view', $data);
        echo view('footer_view', $data);
    }

}
