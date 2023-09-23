<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramCategory extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'created_at' => [
                'type'          => 'datetime',
                'null'          => false,
            ],
            'updated_at' => [
                'type'          => 'datetime',
                'null'          => false,
            ]
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('program_category', true);
    }

    public function down()
    {
        $this->forge->dropTable('program_category');
    }
}
