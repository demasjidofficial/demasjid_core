<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuru extends Migration
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
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'nip' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'jns_kelamin' => [
                'type'       => 'char',
                'constraint' => 1,
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
        $this->forge->createTable('guru', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('guru', true);
    }
}
