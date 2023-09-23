<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDomainMembers extends Migration
{
    public function up()
    {
        $this->forge->addColumn('member', [
            'domain' => [
                'type'       => 'varchar',
                'constraint' => 60,
                'null' => true,
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('member', ['domain']);
    }
}
