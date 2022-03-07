<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonationType extends Migration
{
    /* 
     Contoh tipe donasi yaitu Uang, Barang, Jasa.
    */
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
            'description' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'uom_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'Active',
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
        $this->forge->createTable('bmdonationtype', true);
    }

    public function down()
    {
        $this->forge->dropTable('bmdonationtype', true);
    }
}
