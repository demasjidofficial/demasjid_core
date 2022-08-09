<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class WilayahSeeder extends Seeder
{
    public function run()
    {
        $tableName = 'payment_category';
        $data = [
            [
                'name' =>'Transfer',
            ],
            [
                'name' =>'Payment Gateway',
            ],
        ];

        $this->db->table($tableName)->insertBatch($data);
    }
}
