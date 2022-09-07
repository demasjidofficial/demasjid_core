<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTargetNominal extends Migration
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
            'staff_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'terkumpul_nominal' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'target_nominal' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
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
            'updated_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
       
         
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('nominal_target');
    }

    public function down()
    {
        //
        $this->forge->dropTable('nominal_target');
    }
}
