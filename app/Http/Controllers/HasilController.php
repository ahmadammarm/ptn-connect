<?php

namespace App\Http\Controllers;

use Illuminate\Database\ConnectionInterface;

class HasilController extends Controller
{
    protected $db;

    public function __construct(ConnectionInterface $db)
    {
        $this->db = $db;
    }

    public function index($id)
    {
        $dataKmeans = $this->db->table('data_kmeans')->where('id', $id)->get();

        return view('hasil', ['dataKmeans' => $dataKmeans]);
    }
}
