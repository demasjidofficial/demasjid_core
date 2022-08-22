<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKategoriPelajaran extends Migration
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
                'constraint' => 60,
            ],
            'description' => [
                'type'       => 'varchar',
                'constraint' => 255,
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
        $this->forge->addUniqueKey('name');
        $this->forge->createTable('kategori_pelajaran', true);
    }

    public function down()
    {
        $this->forge->dropTable('kategori_pelajaran', true);
    }
}
