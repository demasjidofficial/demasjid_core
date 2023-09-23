<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSitePosts extends Migration
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
            'title' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'subtitle' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'content' => [
                'type'       => 'text',
            ],
            'permalink' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'meta_title' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'meta_desc' => [
                'type'       => 'text',
            ],
            'labels' => [
                'type'       => 'text',
            ],
            'language_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'Draft',
                'null'       => true,
            ],
            'created_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('siteposts', true);
    }

    public function down()
    {
        $this->forge->dropTable('siteposts', true);
    }
}
