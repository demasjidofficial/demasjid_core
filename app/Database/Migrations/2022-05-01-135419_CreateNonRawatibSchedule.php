<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateNonRawatibSchedule extends Migration
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
            'type_sholat' => [
                'type'       => 'varchar',
                'constraint' => 15,
            ],
            'name' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],
            'pray_date' => [
                'type'       => 'date'
            ],            
            'imam_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'khotib_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->addForeignKey('imam_id', 'imam', 'id');     
        $this->forge->addForeignKey('khotib_id', 'imam', 'id');     
        $this->forge->createTable('non_rawatib_schedule', true);
    }

    public function down()
    {
        $this->forge->dropTable('non_rawatib_schedule', true);
    }
}