<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKalenderAkademik extends Migration
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
            'description' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'level_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'capacity' => [
                'type'       => 'int',
                'null'       => true,
            ],
            'duration' => [
                'type'       => 'int',
                'null'       => true,
            ],
            'uom_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'entity_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->createTable('kalender_akademik', true);
    }

    public function down()
    {
        //
    }
}
