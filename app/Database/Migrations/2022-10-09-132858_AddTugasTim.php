<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTugasTim extends Migration
{
    public function up()
    {
        //
        $this->forge->addColumn('tugas_tim',[
            'nominal_target' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],
            'progres' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => false,
            ],

            'img_serah_terima' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => false,
            ],


            'img_ttd_serah_terima' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => false,
            ]

        ]);
    }

    public function down()
    {
        //
        $this->forge->dropColumn('tugas_tim', ['nominal_target', 'progres', 'img_serah_terima','img_ttd_serah_terima']);
    }
}
