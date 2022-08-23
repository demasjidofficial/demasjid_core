<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddCampaigninDonasi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('donasi',[
            'campaign_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,    
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'Waiting',
                'null'       => true,
            ],
        ]);
        $this->forge->addColumn('donasi',[
        'CONSTRAINT FOREIGN KEY(campaign_id) REFERENCES bmdonationcampaign(id)'
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('donasi', ['campaign_id', 'state']);
    }
}
