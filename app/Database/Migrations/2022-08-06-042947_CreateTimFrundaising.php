<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTimFrundaising extends Migration
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
            'kode_tim' => [
                'type'       => 'varchar',
                'constraint' => 5,
                'null'       => false,
            ],
            
            'nama_tim' => [
                'type'       => 'varchar',
                'constraint' => 248,
                'null'       => false,
            ],
            
            'id_target' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'id_jadwal' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'supervisior' => [
                'type'       => 'varchar',
                'constraint' => 248,
                'null'       => false,
            ],
            

            'staff' => [
                'type'       => 'varchar',
                'constraint' => 248,
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
        $this->forge->createTable('tim_fundraising');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tim_fundraising');
    }
}
