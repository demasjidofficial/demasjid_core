<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterImam extends Migration
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
                'constraint' => 60,
            ],
            'contact' => [
                'type'       => 'varchar',
                'constraint' => 60,
                'null' => true
            ],
            'address' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => true,
            ],
            'description' => [
                'type' => 'text',
            ],
            'is_permanent' => [
                'type' => 'boolean',
                'default' => true
            ],
            'is_khotib' => [
                'type' => 'boolean',
                'default' => true
            ],
            'created_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('imam', true);
    }

    public function down()
    {
        $this->forge->dropTable('imam', true);
    }
}
