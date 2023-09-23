<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UomCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' => 'Berat',
            ],
            [
                'name' => 'Panjang / Jarak',
            ],
            [
                'name' => 'Waktu',
            ],
            [
                'name' => 'Unit',
            ],
            [
                'name' => 'Volume',
            ],
            [
                'name' => 'Waktu Kerja',
            ],
        ];

        $this->db->table('uom_category')->insertBatch($data);
    }
}
