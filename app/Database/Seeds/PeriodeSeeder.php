<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Semester Ganjil'

            ],
            [
                'name' => 'Semester Genap'

            ]

        ];

        $this->db->table('periode')->insertBatch($data);
    }
}
