<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBab extends Migration
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
            'pelajaran_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            
            'sequence' => [
                'type'       => 'int',
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
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addUniqueKey('name');
        $this->forge->addForeignKey('pelajaran_id', 'pelajaran', 'id');
        $this->forge->createTable('bab', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('bab', true);
    }
}
