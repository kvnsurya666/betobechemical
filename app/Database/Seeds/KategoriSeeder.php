<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_kategori' => 'Anti Seize'],
            ['nama_kategori' => 'Rust Cleaner'],
            ['nama_kategori' => 'Electronic Cleaner'],
            ['nama_kategori' => 'Engine Lube'],
            ['nama_kategori' => 'Air Freshener'],
        ];
        $this->db->table('kategori')->insertBatch($data);
    }
}
