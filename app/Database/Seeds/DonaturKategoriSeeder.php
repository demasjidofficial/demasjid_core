<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DonaturKategoriSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Perseorangan'

            ],
            [
                'name' => 'Institusi/Lembaga/Organisasi'

            ],
            [
                'name' => 'Perusahan'

            ],
            [
                'name' => 'UKM'

            ]

        ];

        $this->db->table('donaturcategory')->insertBatch($data);
    }
}
