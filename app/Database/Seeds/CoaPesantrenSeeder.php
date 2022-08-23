<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoaPesantrenSeeder extends Seeder
{
    public function run()
    {
        $sql = <<<'SQL'
                    INSERT INTO chart_of_account (`code`,`name`,`group_account`,`entity_id`) VALUES 
				  ('100000','Aset Lancar','assets',2),
				  ('10000011','Kas','cash_bank',2),
				  ('10000012','Bank','cash_bank',2)
            SQL;

        $this->db->query($sql);
    }
}
