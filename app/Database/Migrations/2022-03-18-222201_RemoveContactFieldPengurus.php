<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemoveContactFieldPengurus extends Migration
{
    public function up()
    {
        $this->forge->dropColumn('pengurus', ['contact']);
    }

    public function down()
    {
        $this->forge->addColumn('pengurus', [
            'contact' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ]
        ]);
    }
}
