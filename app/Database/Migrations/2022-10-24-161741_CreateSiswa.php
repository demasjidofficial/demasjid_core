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
                'type'       => 'char',
                'constraint' => 1,
            ],
            'birth_place' => [
                'type'       => 'varchar',
                'constraint' => 50,
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
                'type'       => 'varchar',
                'constraint' => 10,
            ],
            'kelas_id' => [
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
            'tahun_ajaran_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->addUniqueKey('nis');
        $this->forge->addForeignKey('kelas_id', 'kelas', 'id'); // apakah akan dibutuhkan, setiap ganti kelas akan mengganti satu persatu
        $this->forge->addForeignKey('tahun_ajaran_id', 'tahun_ajaran', 'id');
        $this->forge->createTable('siswa', true);
    }

    public function down()
    {
        $this->forge->dropTable('siswa', true);
    }
}
