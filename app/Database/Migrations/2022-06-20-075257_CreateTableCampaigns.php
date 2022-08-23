<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTableCampaigns extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],            
            'id_program' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],     
            'status' => [
                'type' => 'varchar',
                'constraint' => 10,
                'null' => true
            ], 
            'is_active' => [
                'type' => 'varchar',
                'constraint' => 5,
                'null' => true
            ], 
            'is_delete' => [
                'type' => 'varchar',
                'constraint' => 5,
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
            'create_date' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'modified_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
            'modified_date' => [
                'type' => 'datetime',
                'null' => false,
            ],
        ]);

        $this->forge->addPrimaryKey('id');  
        $this->forge->addForeignKey('id_program', 'program', 'id');
        $this->forge->createTable('campaigns', true);

        $this->db->disableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('master_bank', true);
    }
}
