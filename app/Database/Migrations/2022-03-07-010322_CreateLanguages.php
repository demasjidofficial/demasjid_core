<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateLanguages extends Migration
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
            'code' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],  
            'path_icon' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'Active',
                'null'       => true,
            ],
            'created_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('languages', true);
    }

    public function down()
    {
        $this->forge->dropTable('languages', true);
    }
}
