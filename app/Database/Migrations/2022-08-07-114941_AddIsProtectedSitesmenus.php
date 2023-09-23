<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsProtectedSitesmenus extends Migration
{
    public function up()
    {
        $this->forge->addColumn('sitemenus', [
            'isProtected' => [
                'type'       => 'int',
                'constraint' => 1,
                'default' => 0
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('sitemenus', ['isProtected']);
    }
}
