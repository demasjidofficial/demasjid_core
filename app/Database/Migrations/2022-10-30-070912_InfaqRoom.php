<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfaqRoom extends Migration
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
            'nama_pemesan' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'   => false,
            ],
            'room_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'tanggal_infaq' => [
                'type'          => 'date',
            ],
            'jumlah_infaq' => [
                'type'           => 'int',
                'constraint'     => 13,
                'unsigned'       => true,
            ],
            'status' => [
                'type'          => 'varchar',
                'constraint'    => 20,
                'comment'       => 'valid value cash,credit'
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
        $this->forge->addForeignKey('room_id', 'room', 'id');
        $this->forge->createTable('infaq_room', true);
    }
    public function down()
    {
        $this->forge->dropTable('infaq_room', true);
    }
}