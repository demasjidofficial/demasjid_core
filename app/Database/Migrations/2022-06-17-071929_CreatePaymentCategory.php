<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePaymentCategory extends Migration
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
            'category' => [
                'type' => 'varchar',
                'constraint' => 50,
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
        $this->forge->createTable('payment_category', true);
    }

    public function down()
    {
        $this->forge->dropTable('payment_category', true);
    }
}
