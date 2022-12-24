<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
	
    public function run()
    {        
        $data = [
            [                             
                'desa_id' => '35.78.04.1003',   
                'name' => 'Masjid Contoh',                
                'entity_id' => 1                
            ],            
        ];

        $this->db->table('profile')->insertBatch($data);
    }	
}
