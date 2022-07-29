<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DonaturSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Bpk. XYZ',
                'id_kategori'=>1

            ],
            [
                'name' => 'Ibu. ABC',
                'id_kategori'=>1

            ],
            [
                'name' => 'Dinkes Madiun',
                'id_kategori'=>2

            ],
            [
                'name' => 'KitaBisa',
                'id_kategori'=>2

            ],
            [
                'name' => 'Yayasan Amal Jariyah Malang',
                'id_kategori'=>2

            ],
            [
                'name' => 'PT Kreasi Alam Teknologi',
                'id_kategori'=>3

            ],
            [
                'name' => 'CV Insan Muslim',
                'id_kategori'=>3

            ],
            [
                'name' => 'Koperasi Syirkah Berkah Bersama',
                'id_kategori'=>3

            ],
            [
                'name' => 'Warkop Delima Malang',
                'id_kategori'=>4

            ],
            [
                'name' => 'RM Padang Sleko Madiun',
                'id_kategori'=>4

            ],
            [
                'name' => 'Warteg Arema Kepanjen',
                'id_kategori'=>4

            ]

        ];

        $this->db->table('donatur')->insertBatch($data);
    }
}
