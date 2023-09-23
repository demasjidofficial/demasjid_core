<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BmDonationCampaignSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [

            [
                'name' => 'Pengecoran Masjid Darussalam',
                'label' => 'Pengecoran Masjid Darussalam',
                'path_image' => '',
                'description' => '',
                'campaignstart_date' => '2022-08-10',
                'campaignend_date' => '2022-12-31',
                'campaign_tonase' => '6000000000',

                'donationtype_id' => '1',
                'program_id' => '2',
                'state' => 'Belum Mulai',
            ]

        ];

        $this->db->table('bmdonationcampaign')->insertBatch($data);
    }
}
