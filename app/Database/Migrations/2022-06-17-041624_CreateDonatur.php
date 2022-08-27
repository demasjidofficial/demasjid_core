<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonatur extends Migration
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

            'id_donatur_type' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'donatur_type_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'name' => [
                'type'       => 'varchar',
                'constraint' => 128,
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

       

        $this->forge->addForeignKey('donatur_type_id', 'donatur_type', 'id');    
        $this->forge->createTable('donatur', true);

    }

    public function down()
    {
        $this->forge->dropTable('donatur', true);
    }
}
