<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SiteMenusSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'name' => 'Beranda',
                'label' => 'Beranda',
                'parent' => 0,
                'language_id' => 1,
                'state' => 'release',
                'created_by' => 1,
                'created_at' => '2022-08-07 21:01:00',
                'updated_at' => '2022-08-18 19:41:47',
                'isProtected' => 1,
            ]
        ];

        $this->db->table('sitemenus')->insertBatch($data);
    }
}
