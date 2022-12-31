<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UomSeeder extends Seeder
{
	
    public function run()
    {        
        $data = [
            ['name' => 'kg','code' => 'kg', 'ratio' => 1,'uomcategory_id' => 1, 'type' => 'reference'],
            ['name' => 'kw','code' => 'kw', 'ratio' => 100,'uomcategory_id' => 1, 'type' => 'bigger'],
            ['name' => 'ton','code' => 'ton', 'ratio' => 1000,'uomcategory_id' => 1, 'type' => 'bigger'],
            ['name' => 'ons','code' => 'ons', 'ratio' => 10,'uomcategory_id' => 1, 'type' => 'smaller'],
            ['name' => 'gram','code' => 'gram', 'ratio' => 100,'uomcategory_id' => 1, 'type' => 'smaller'],
            ['name' => 'm','code' => 'm', 'ratio' => 1,'uomcategory_id' => 2,'type' => 'reference'],
            ['name' => 'km','code' => 'km', 'ratio' => 1000,'uomcategory_id' => 2, 'type' => 'bigger'],
            ['name' => 'dm','code' => 'dm', 'ratio' => 10,'uomcategory_id' => 2, 'type' => 'bigger'],
            ['name' => 'cm','code' => 'cm', 'ratio' => 100,'uomcategory_id' => 2, 'type' => 'smaller'],
            ['name' => 'mm','code' => 'mm', 'ratio' => 1000,'uomcategory_id' => 2, 'type' => 'smaller'],            
            ['name' => 'pcs','code' => 'pcs', 'ratio' => 12,'uomcategory_id' => 3, 'type' => 'smaller'],
            ['name' => 'lusin','code' => 'lusin', 'ratio' => 1,'uomcategory_id' => 3, 'type' => 'reference'],
            ['name' => 'jam','code' => 'jam', 'ratio' => 1,'uomcategory_id' => 4, 'type' => 'reference'],
            ['name' => 'menit','code' => 'menit', 'ratio' => 60,'uomcategory_id' => 4, 'type' => 'smaller'],
            ['name' => 'detik','code' => 'detik', 'ratio' => 3600,'uomcategory_id' => 4, 'type' => 'smaller'],
            ['name' => 'hari','code' => 'hari', 'ratio' => 24,'uomcategory_id' => 4, 'type' => 'bigger']
        ];

        $this->db->table('uom')->insertBatch($data);
    }	
}
