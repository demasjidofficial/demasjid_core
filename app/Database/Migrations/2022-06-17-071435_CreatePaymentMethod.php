<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentMethod extends Migration
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

            'id_bank' => [

            'master_payment_id' => [

                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],

            'no_rek' => [
                'type' => 'int',
                'constraint' => 20,
                'null' => true
            ],
            'nama_rek' => [

            'rek_no' => [
                'type' => 'varchar',
                'constraint' => 30,
                'null' => true
            ],
            'rek_name' => [

                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],

            'id_payment_category' => [

            'payment_category_id' => [

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
        $this->forge->addForeignKey('id_bank', 'bank', 'id');    
        $this->forge->addForeignKey('id_payment_category', 'payment_category', 'id');    
        $this->forge->createTable('payment_method', true);

        $this->db->disableForeignKeyChecks();

        $this->forge->addPrimaryKey('id');  
        $this->forge->addForeignKey('payment_category_id', 'payment_category', 'id');    
        $this->forge->createTable('payment_method', true);

    }

    public function down()
    {
        $this->forge->dropTable('payment_method', true);
    }
}
