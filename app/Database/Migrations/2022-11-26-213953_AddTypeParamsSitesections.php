<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTypeParamsSitesections extends Migration
{
    public function up()
    {
        $this->forge->addColumn('sitesections',[
            'type' => [
                'type'       => 'varchar',
                'constraint' => 50,
            ],      
            'params' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('sitesections', ['type, params']);
    }
}
