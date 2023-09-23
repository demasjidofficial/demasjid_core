<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiteSections extends Migration
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
            'content' => [
                'type'       => 'text',
            ],
            'sequence' => [
                'type'       => 'int',
                'constraint' => 5,
                'unsigned'   => true,
                'null'       => true,
            ],
            'sitepage_id' => [
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
        $this->forge->createTable('sitesections', true);
    }

    public function down()
    {
        $this->forge->dropTable('sitesections', true);
    }
}
