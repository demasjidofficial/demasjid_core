<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTugasTim extends Migration
{
    public function up()
    {
        $this->forge->addColumn('tugas_tim', [
            'id_supervisor' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],
            'id_tim' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ]

        ]);
    }

    public function down()
    {
        //
        $this->forge->dropColumn('tugas_tim', ['id_supervisor','id_tim']);
    }
}
