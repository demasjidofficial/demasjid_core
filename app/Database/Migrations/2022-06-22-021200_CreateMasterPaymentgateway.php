<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMasterPaymentgateway extends Migration
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
            'path_logo' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'name' => [
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
        $this->forge->createTable('master_paymentgateway', true);
    }

    public function down()
    {
        $this->forge->dropTable('master_paymentgateway', true);
    }
}
