<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSiteSocials extends Migration
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
                'constraint' => 255,
            ],
            'link' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ],  
            'path_icon' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'release',
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
        $this->forge->createTable('sitesocials', true);
    }

    public function down()
    {
        $this->forge->dropTable('sitesocials', true);
    }
}
