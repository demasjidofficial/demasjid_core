<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProfile extends Migration
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
            'desa_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => false,
            ],
            'code' => [
                'type'       => 'varchar',
                'constraint' => 18,
                'null'       => true,
            ],
            'address' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => false,
            ],
            'path_logo' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'entity_id' => [
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
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('entity_id', 'entity', 'id');
        $this->forge->createTable('profile', true);
    }

    public function down()
    {
        $this->forge->dropTable('profile');
    }
}
