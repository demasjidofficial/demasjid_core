<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTimFund extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'target_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],

            'supervisor' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => false,
            ],




            'created_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'updated_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],


        ]);
        $this->forge->addKey('id', true);

        $this->forge->createTable('tim_fundraising');
    }

    public function down()
    {
        //
        $this->forge->dropTable('tim_fundraising');
    }
}
