<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTugasTim extends Migration
{
    public function up()
    {
        $this->forge->addColumn('tugas_tim', [
            'supervisor_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],
            'tim_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ]

        ]);
    }

    public function down()
    {
        //
        $this->forge->dropColumn('tugas_tim', ['supervisor_id','tim_id']);
    }
}
