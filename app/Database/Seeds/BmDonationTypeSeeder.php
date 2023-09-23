<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BmDonationTypeSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Uang',
                'uom_id' => 11,
                'state' => 'A',
                'description' => 'Bantuan dalam bentuk uang',
            ],
            [
                'name' => 'Barang',
                'uom_id' => 11,
                'state' => 'A',
                'description' => 'Bantuan dalam bentuk barang',
            ],

        ];

        $this->db->table('bmdonationtype')->insertBatch($data);
    }
}
