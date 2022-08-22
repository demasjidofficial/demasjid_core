<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePesantrenMastereducationlevel extends Migration
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
            'pstr_educationlevel_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
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
        $this->forge->addForeignKey('pstr_educationlevel_id', 'pstr_educationlevel', 'id');
        $this->forge->createTable('pstr_kelas', true);

    }

    public function down()
    {
        $this->forge->dropTable('pstr_kelas', true);
    }
}
