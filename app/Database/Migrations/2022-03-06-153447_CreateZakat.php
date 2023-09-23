<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateZakat extends Migration
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
            'name' => [
                'type'       => 'varchar',
                'constraint' => 128,
            ],
            'label' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],
            'zakat_tonase' => [
                'type'       => 'decimal',
                'null'       => true,
            ],
            'zakat_nominal' => [
                'type'       => 'decimal',
                'null'       => true,
            ],
            'zakatcategory_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'zakatrule_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'description' => [
                'type'       => 'text',
            ],
            'donationtype_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'Open',
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
        $this->forge->createTable('bmzakat', true);
    }

    public function down()
    {
        $this->forge->dropTable('bmzakat', true);
    }
}
