<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImageProgram extends Migration
{
    public function up()
    {
        $this->forge->addColumn('program',[
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'description'
            ],
            'cost_estimate' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'after'      => 'description'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('program', ['path_image', 'cost_estimate']);
    }
}
