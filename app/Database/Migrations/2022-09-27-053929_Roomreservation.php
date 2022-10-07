<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RoomReserv extends Migration
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
            'room_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'namapemesan' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'   => false,
            ],
            'no_tlp' => [
                'type'       => 'varchar',
                'constraint' => 25,
                'unsigned'       => false,
            ],
            'alamat' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'       => false,
            ],
            'start_date' => [
                'type'          => 'date',
            ],
            'end_date' => [
                'type'          => 'date',
            ],
            'agenda' => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'keterangan' => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'status' => [
                'type'          => 'varchar',
                'constraint'    => 20,
                'comment'       => 'valid value terima,tolak'
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
        $this->forge->createTable('room_reservation', true);
    }
    public function down()
    {
        $this->forge->dropTable('room_reservation', true);
    }
}
