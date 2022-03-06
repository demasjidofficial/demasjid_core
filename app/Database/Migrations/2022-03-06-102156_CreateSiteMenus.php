<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiteMenus extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 128,
            ],
            'label' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'parent' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('parent', 'sitemenus', 'id');
        $this->forge->createTable('sitemenus', true);
    }

    public function down()
    {
        $this->forge->dropTable('sitemenus', true);
    }
}