<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiswa extends Migration
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
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'address'
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'nick_name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'gender' => [
                'type'          => 'varchar',
                'constraint'    => 20,
            ],
            'birth_place' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,                
            ],
            'birth_date' => [
                'type'          => 'date',
                'null'          => false,
            ],
            'provinsi_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true                
            ],
            'kota_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,                
            ],
            'kecamatan_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,                
            ],
            'desa_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true                
            ],            
            'address' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => true,
                'after'      => 'jabatan_id'
            ],

            'nis' => [
                'type'       => 'int',
                'null'       => true,
            ],
            'class_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],          
            'school_origin' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => true,
                'after'      => 'jabatan_id'
            ],  

            'father_name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'father_job' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'father_tlpn' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,
                'after'      => 'address'
            ],
            'father_email' => [
                'type'       => 'varchar',
                'constraint' => 35,
                'null'       => true,
                'after'      => 'telephone'
            ],   
            'mother_name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'mother_job' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'mother_tlpn' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,
                'after'      => 'address'
            ],
            'mother_email' => [
                'type'       => 'varchar',
                'constraint' => 35,
                'null'       => true,
                'after'      => 'telephone'
            ],  
                
            'description' => [
                'type' => 'text',
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
        $this->forge->addForeignKey('class_id', 'kelas', 'id');
        $this->forge->createTable('siswa', true);
    }

    public function down()
    {
        $this->forge->dropTable('siswa', true);
    }
}
