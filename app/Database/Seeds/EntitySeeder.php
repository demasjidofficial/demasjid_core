<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EntitySeeder extends Seeder
{
    public function run()
    {
        $sql = <<<'SQL'
                    INSERT INTO entity (`name`,`type`) VALUES 
				  ('Utama','masjid'),
                  ('Utama','pesantren'),
                  ('Utama','tpq')
            SQL;

        $this->db->query($sql);
    }
}
