<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonasi extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],            
            'id_donatur' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_pembayaran' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'id_program' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],            
            'dana_in' => [
                'type'       => 'int',
                'constraint' => 2,
            ],
            'tgl_transaksi' => [
                'type'       => 'date'
            ], 
            'bukti_pembayaran' => [
                'type'       => 'blob',
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
        $this->forge->addForeignKey('id_donatur', 'donatur_type', 'id');     
        $this->forge->addForeignKey('id_pembayaran', 'pembayaran', 'id');     
        $this->forge->addForeignKey('id_program', 'program', 'id');     
        $this->forge->createTable('donasi', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('donasi', true);
    }
}
