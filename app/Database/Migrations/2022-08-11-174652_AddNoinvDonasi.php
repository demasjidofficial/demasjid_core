<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNoinvDonasi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('donasi',[
            'no_inv' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ]   
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('donasi', ['no_inv']);
    }
}
