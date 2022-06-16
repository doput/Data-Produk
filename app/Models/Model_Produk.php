<?php

namespace App\Model;

use Codeigniter\Model;

class Model_Siswa extends Model
{
    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAllData()
    {
        return $this->db->table('produk')->get();
    }
}
