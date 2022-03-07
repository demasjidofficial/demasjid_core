<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUomCategory extends Migration
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
                'type'       => 'varchar',
                'constraint' => 255,
            ],  
            'description' => [
                'type'       => 'varchar',
                'constraint' => 255,
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
        $this->forge->createTable('uom_category', true);
    }

    public function down()
    {
        $this->forge->dropTable('uom_category', true);
    }
}
