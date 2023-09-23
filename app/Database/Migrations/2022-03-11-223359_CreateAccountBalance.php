<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAccountBalance extends Migration
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
            'name' => [
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'account' => [
                'type'          => 'varchar',
                'constraint'    => 50,
                'comment'       => 'nomer rekening, untuk kas set bebas aja'
            ],
            'entity_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->addForeignKey('entity_id', 'entity', 'id');
        $this->forge->createTable('account_balance', true);

    }

    public function down()
    {
        $this->forge->dropTable('account_balance');
    }
}
