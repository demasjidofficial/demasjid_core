<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCostActualProgram extends Migration
{
    public function up()
    {
        $this->forge->addColumn('program',[            
            'cost_actual' => [
                'type'          => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'          => true,
                'default'       => 0,
                'after'      => 'cost_estimate'
            ]
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('program', ['cost_actual']);
    }
}
