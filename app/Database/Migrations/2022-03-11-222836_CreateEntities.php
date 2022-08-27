<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateEntities extends Migration
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
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'type' => [
                'type'          => 'varchar',
                'constraint'    => 20,
                'default'       => 'masjid',
                'comment'       => 'valid value (masjid, pesantren, sekolah, tpq)'
            ],
            'created_at' => [
                'type'          => 'datetime',
                'null'          => false,                
            ],
            'updated_at' => [
                'type'          => 'datetime',
                'null'          => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('entity', true);
    }

    public function down()
    {
        $this->forge->dropTable('entity');
    }
}
