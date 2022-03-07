<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUoM extends Migration
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
            'code' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'type' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'ratio' => [
                'type'       => 'float',
                'null'       => true,
            ],
            'uomcategory_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->createTable('uom', true);
    }

    public function down()
    {
        $this->forge->dropTable('uom', true);
    }
}
