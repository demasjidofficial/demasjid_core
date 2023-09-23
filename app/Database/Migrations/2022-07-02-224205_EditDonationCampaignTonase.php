<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDonationCampaignProgramId extends Migration
{
    public function up()
    {
        $fields = [
        'campaign_tonase' => [
            'type'       => 'decimal',
            'constraint' => 15,0,
            'unsigned'   => true,
            'null'       => true,
        ],
        'campaign_collected' => [
            'type'       => 'decimal',
            'constraint' => 15,0,
            'unsigned'   => true,
            'null'       => true,
            'default'       => 0,
        ]];

        $this->forge->modifyColumn('bmdonationcampaign', $fields);
    }


    public function down()
    {
        $this->forge->dropColumn('bmdonationcampaign', ['campaign_tonase', 'campaign_collected']);
    }
}
