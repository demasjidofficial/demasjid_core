<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePendaftaran extends Migration
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
            'kelas_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'state' => [
                'type'          => 'varchar',
                'constraint'    => 20,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'nis' => [
                'type'       => 'varchar',
                'constraint' => 10,
            ],
            'nick_name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            'birth_date' => [
                'type'          => 'date',
                'null'          => false,
            ],
            'birth_place' => [
                'type'       => 'varchar',
                'constraint' => 50,
                'null'       => true,
            ],
            'gender' => [
                'type'       => 'char',
                'constraint' => 1,
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
            'school_origin' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => true,
                'after'      => 'jabatan_id'
            ],
            'description' => [
                'type' => 'text',
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
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'address'
            ],
            'tahun_ajaran_id' => [
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
        $this->forge->addUniqueKey('nis');
        $this->forge->addForeignKey('kelas_id', 'kelas', 'id'); // untuk pendaftaran bagiamana?
        $this->forge->addForeignKey('tahun_ajaran_id', 'tahun_ajaran', 'id');
        $this->forge->createTable('pendaftaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('pendaftaran', true);
    }
}
