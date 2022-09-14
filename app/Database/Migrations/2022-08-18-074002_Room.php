<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Room extends Migration
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
            'gambar' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'   => false,
            ],
            'namaruangan' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'       => false,
            ],
            'deskripsi' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'       => false,
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
        $this->forge->createTable('room', true);
    }
    public function down()
    {
        $this->forge->dropTable('room', true);
    }
}
