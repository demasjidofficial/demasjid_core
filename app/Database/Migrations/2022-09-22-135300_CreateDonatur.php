<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonatur extends Migration
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
            'tugas_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'nominal' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => false,
            ],
            'no_transaksi' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'tanggal_transaksi' => [
                'type'       => 'date'
            ], 
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'path_signature' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'nama' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'alamat' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'email' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'nohp' => [
                'type'       => 'varchar',
                'constraint' => 20,
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
        $this->forge->addForeignKey('tugas_id', 'tugas_tim', 'id');     
       
        $this->forge->createTable('donatur', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('donatur', true);
    }
}
