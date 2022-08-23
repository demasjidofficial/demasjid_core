<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTargetFundraising extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'campaign' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
            ],
            'donatur' => [
                'type'       => 'varchar',
                'constraint' => 128,
            ],
            'campaign_name' => [
                'type'       => 'varchar',
                'constraint' => 128,
            ],
            'target_nominal' => [
                'type'       => 'varchar',
                'constraint' => 128, 
            ],
            'tipe_donasi' => [
                'type'       => 'varchar',
                'constraint' => 128,
            ],

            'jadwal_mulai' => [
                'type'       => 'datetime',
                'null'       => false,
            ],
            'jadwal_akhir' => [
                'type'       => 'datetime',
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
        $this->forge->createTable('target_fundraising');
    }

    public function down()
    {
        $this->forge->dropTable('target_fundraising');
    }
}
