<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumnTableProfile extends Migration
{
    public function up()
    {
        $this->forge->addColumn('profile', [
            'name' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'  => true
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('profile', ['name']);
    }
}
