<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonatur extends Migration
{
    public function up()
    {
        //
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
            'id_kategori' => [
                'type'       => 'int',
                'constraint' => 11,
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
            'updated_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('donatur');
    }

    public function down()
    {
        //
        $this->forge->dropTable('donatur');
    }
}
