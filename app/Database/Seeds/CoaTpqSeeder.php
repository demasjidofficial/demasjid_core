<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoaTpqSeeder extends Seeder
{
    public function run()
    {
        $sql = <<<'SQL'
                    INSERT INTO chart_of_account (`code`,`name`,`group_account`,`entity_id`) VALUES 
				  ('100000','Aset Lancar','assets',3),
				  ('10000011','Kas','cash_bank',3),
				  ('10000012','Bank','cash_bank',3)
            SQL;

        $this->db->query($sql);
    }
}
