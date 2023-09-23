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
            'description' => [
                'type'          => 'varchar',
                'constraint'    => 200,
            ],
            'type' => [
                'type'          => 'varchar',
                'constraint'     => 6,
            ],
            'amount' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
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
