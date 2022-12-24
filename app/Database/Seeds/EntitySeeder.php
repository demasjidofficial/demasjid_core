<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EntitySeeder extends Seeder
{
	
    public function run()
    {        
        $data = [
            [                                
                'name' => 'Masjid Contoh',
                'type' => 'masjid',
                'created_by' => 1
            ],            
        ];

        $this->db->table('entity')->insertBatch($data);
    }	
}
