<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterEwallet extends Migration
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
            'logo' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'last_name',
            ],     
            'nama_ewallet' => [
                'type' => 'varchar',
                'constraint' => 100,
                'null' => true
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
        $this->forge->createTable('master_ewallet', true);
    }

    public function down()
    {
        $this->forge->dropTable('master_ewallet', true);
    }
}
