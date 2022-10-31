<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTugasTim extends Migration
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

            'tugas' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => false,
            ],

            'kode_tugas' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => false,
            ],

            'nominal' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'nominal_target' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'progres' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => false,
            ],

            'img_serah_terima' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => false,
            ],


            'img_ttd_serah_terima' => [
                'type'       => 'varchar',
                'constraint' => 255,
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
      
        $this->forge->createTable('tugas_tim');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tugas_tim');
    }
}
