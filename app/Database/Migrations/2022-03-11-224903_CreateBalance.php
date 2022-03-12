<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBalance extends Migration
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
            'account_balance_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'name' => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'description' => [
                'type'          => 'varchar',
                'constraint'    => 200,
            ],   
            'debit' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'credit' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'amount' => [
                'type'          => 'int',
                'constraint'     => 15,
                'unsigned'       => false,
            ],
            'transaction_date' => [
                'type'          => 'date',
                'null'          => false,                
            ],            
            'created_at' => [
                'type'          => 'datetime',
                'null'          => false,                
            ],
            'updated_at' => [
                'type'          => 'datetime',
                'null'          => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('account_balance_id', 'account_balance', 'id');
        $this->forge->createTable('balance', true);

    }

    public function down()
    {
        $this->forge->dropTable('balance');
    }
}
