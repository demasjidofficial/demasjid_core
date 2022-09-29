<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTimStaff extends Migration
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
            'tim_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'user_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'nominal_max' => [
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
            'updated_by' => [
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
        $this->forge->createTable('tim_staff');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tim_staff');
    }
}
