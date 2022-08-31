<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PaymentCategorySeeder extends Seeder
{
    public function run()
    {   
        $sql = <<<'SQL'
                INSERT INTO payment_category (`name`) VALUES
                ('Transfer'),
                ('Payment Gateway')
        SQL;

        $this->db->query($sql);
    }
}
