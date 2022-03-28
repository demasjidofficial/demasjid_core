<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgramCost extends Migration
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
            'program_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'name' => [
                'type'          => 'varchar',
                'constraint'    => 150,
            ],
            'cost_estimate' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true                
            ],
            'cost_actual' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'          => true,
                'default'       => 0, 
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
        $this->forge->addForeignKey('program_id', 'program', 'id');
        $this->forge->createTable('program_cost', true);
    }

    public function down()
    {
        $this->forge->dropTable('program_cost');
    }
}
