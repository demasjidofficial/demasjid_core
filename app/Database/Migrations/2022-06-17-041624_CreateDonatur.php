<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonatur extends Migration
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
            'id_donatur_type' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],
            'no_hp' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],
            'alamat' => [
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
        $this->forge->addForeignKey('id_donatur_type', 'donatur', 'id');    
        $this->forge->createTable('donatur', true);

        $this->db->disableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('donatur', true);
    }
}
