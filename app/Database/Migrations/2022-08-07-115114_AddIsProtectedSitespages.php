<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsProtectedSitespages extends Migration
{
    public function up()
    {
        $this->forge->addColumn('sitepages',[
            'isProtected' => [
                'type'       => 'int',
                'constraint' => 1,
                'default' => 1
            ],      
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('sitepages', ['isProtected']);
    }
}
