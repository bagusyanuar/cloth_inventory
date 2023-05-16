<?php


namespace App\Http\Controllers;


use App\Helper\CustomController;
use App\Models\JenisBarang;

class JenisBarangController extends CustomController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($this->request->ajax()) {
            $data = JenisBarang::all();
            return $this->basicDataTables($data);
        }
        return view('jenis-barang.index');
    }
}
