<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTimFund extends Migration
{
    public function up()
    {
    $this->forge->addColumn('tim_fundraising',[
        'kode_tim' => [
            'type'       => 'varchar',
            'constraint' => 100,
            'null'       => false,
        ],
        'nama_tim' => [
            'type'       => 'varchar',
            'constraint' => 100,
            'null'       => false,
        ],

        'status' => [
            'type'       => 'varchar',
            'constraint' => 255,
            'null'       => false,
        ]



    ]);
}

public function down()
{
    //
    $this->forge->dropColumn('tim_fundraising', ['kode_tim', 'nama_tim', 'status']);
}
}
