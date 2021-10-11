<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'      => 'nanda',
                'password'  => md5('12200514')
            ],
            [
                'nama'      => 'admin',
                'password'  => md5('12345')
            ],
            [
                'nama'      => '12200514',
                'password'  => md5('nanda')
            ]
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}