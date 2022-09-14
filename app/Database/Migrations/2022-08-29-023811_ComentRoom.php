<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Coment extends Migration
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
            'kritik' => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'saran' => [
                'type'          => 'varchar',
                'constraint'    => 50,
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
        $this->forge->createTable('comment_room', true);
    }
    public function down()
    {
        $this->forge->dropTable('comment_room', true);
    }
}
