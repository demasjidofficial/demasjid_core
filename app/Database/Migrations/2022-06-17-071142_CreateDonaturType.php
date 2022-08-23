<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonaturType extends Migration
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
            'type' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
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
        $this->forge->createTable('donatur_type', true);
    }

    public function down()
    {
        $this->forge->dropTable('donatur_type', true);
    }
}
