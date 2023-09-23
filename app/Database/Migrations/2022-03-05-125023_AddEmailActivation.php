<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddEmailActivation extends Migration
{
    public function up()
    {
        $this->forge->addColumn('member', [
            'email' => [
                'type'       => 'varchar',
                'constraint' => 50,
                'null'       => true,
                'after'      => 'address'
            ],
            'telephone' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,
                'after'      => 'email'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('member', ['email', 'telephone']);
    }
}
