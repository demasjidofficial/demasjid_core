<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsProtectedSitesections extends Migration
{
    public function up()
    {
        $this->forge->addColumn('sitesections', [
            'isProtected' => [
                'type'       => 'int',
                'constraint' => 1,
                'default' => 1
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('sitesections', ['isProtected']);
    }
}
