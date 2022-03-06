<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInfaqShodaqoh extends Migration
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
            'needed_funds' => [
                'type'       => 'decimal',
                'null'       => true, 
            ],
            'collected_funds' => [
                'type'       => 'decimal',
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
            'program_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'category_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
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
        //$this->forge->addForeignKey('category_id', 'bminfaqshodaqohcategory', 'id');
        $this->forge->createTable('bminfaqshodaqoh', true);
    }

    public function down()
    {
        $this->forge->dropTable('bminfaqshodaqoh', true);
    }
}
