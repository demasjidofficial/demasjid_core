<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePelajaran extends Migration
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
            'class_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 60,
            ],
            
            'category_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'duration' => [
                'type'       => 'int',
                'null'       => true,
            ],
            'uom_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'sequence' => [
                'type'       => 'int',
                'null'       => true,
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
        $this->forge->addForeignKey('uom_id', 'uom', 'id');
        $this->forge->addForeignKey('category_id', 'kategori_pelajaran', 'id');
        $this->forge->addForeignKey('class_id', 'kelas', 'id');
        $this->forge->createTable('pelajaran', true);
    }

    public function down()
    {
        //
        $this->forge->dropTable('pelajaran', true);
    }
}
