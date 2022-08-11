<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Dataruangan extends Migration
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
            'nama' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'   => false,
            ],
            'ukuran' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'       => false,
            ],
            'fasilitas' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'       => false,
            ],
            'kondisi' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'unsigned'   => false,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('dataruangan', true);
    }

    public function down()
    {
        $this->forge->dropTable('dataruangan', true);
    }
}
