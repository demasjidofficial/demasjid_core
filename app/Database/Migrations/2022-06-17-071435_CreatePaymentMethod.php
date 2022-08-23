<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentMethod extends Migration
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
            'master_payment_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
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
        $this->forge->addForeignKey('payment_category_id', 'payment_category', 'id');    
        $this->forge->createTable('payment_method', true);
    }

    public function down()
    {
        $this->forge->dropTable('payment_method', true);
    }
}
