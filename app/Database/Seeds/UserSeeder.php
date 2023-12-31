<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_admin'      => 'Kevin',
                'email'     => 'kevinsuryaperdana@gmail.com',
                'username'    => 'kvnsuryap',
                'password' => password_hash('21101996', PASSWORD_BCRYPT),
            ],
            [
                'nama_admin'      => 'Dwiono',
                'email'     => 'gdwiono@yahoo.co.id',
                'username'    => 'gdwiono',
                'password' => password_hash('admindwi', PASSWORD_BCRYPT),
            ],
        ];
        $this->db->table('users')->insertBatch($data);
    }
}
