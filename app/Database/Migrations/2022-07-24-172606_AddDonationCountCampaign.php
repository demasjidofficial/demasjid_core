<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddDonationCountCampaign extends Migration
{
    public function up()
    {
        $this->forge->addColumn('bmdonationcampaign',[
            'donation_count' => [
                'type'       => 'int',
                'constraint' => 11,
                'default' => 0,
                'unsigned'   => true,
            ],            
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('bmdonationcampaign', ['donation_count']);
    }
}
