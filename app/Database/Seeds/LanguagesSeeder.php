<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LanguagesSeeder extends Seeder
{
	
    public function run()
    {
        // $sql = <<<'SQL'
        //             INSERT INTO languages (`code`,`name`,`state`,`is_default`) VALUES
        //     	 	('id','Indonesia','Inactive',1),
        //     	 	('sa','Arabic','Inactive',0),
		// 		 	('en','English','Inactive',0)
        //     SQL;

        // $this->db->query($sql);

        // script ditas error invalid indentation. mixed spaces and tabs are not allowed.intelephense(1028)
        
        $data = [
            [
                'id' => 1,
                'code' => 'ID',
                'name' => 'Indonesia',
                'path_icon' => '',
                'is_default' => 1
            ],
            [
                'id' => 2,
                'code' => 'SA',
                'name' => 'Arab',
                'path_icon' => '',
                'is_default' => 0


            ],
            [
                'id' => 3,
                'code' => 'EN',
                'name' => 'English',
                'path_icon' => '',
                'is_default' => 0
            ]
        ];

        $this->db->table('languages')->insertBatch($data);
    }
	
}
