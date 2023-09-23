<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateJadwalFundraising extends Migration
{
    public function up()
    {
        //
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],

            'jadwal_mulai' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'jadwal_akhir' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'target_dana' => [
                'type'       => 'int',
                'constraint' => 11,
                'null'       => false,
            ],


            'created_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'updated_at' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'updated_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('jadwal_fundraising');
    }

    public function down()
    {
        //
        $this->forge->dropTable('jadwal_fundraising');
    }
}
