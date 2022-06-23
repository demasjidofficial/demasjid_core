<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonationCampaign extends Migration
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
            'name' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ], 
            'label' => [
                'type'       => 'varchar',
                'constraint' => 255,
            ], 
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'description' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'campaignstart_date' => [
                'type'       => 'date'
            ],
            'campaignend_date' => [
                'type'       => 'date'
            ],
            'campaign_tonase' => [
                'type'       => 'decimal',
                'null'       => true, 
            ],         
            'campaigncategory_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'donationtype_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'varchar',
                'constraint' => 20,
                'default'    => 'Open',
                'null'       => true,
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
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('campaigncategory_id', 'bmdonationcampaigncategory', 'id');     
        $this->forge->addForeignKey('donationtype_id', 'bmdonationtype', 'id'); 
        $this->forge->createTable('bmdonationcampaign', true);
    }

    public function down()
    {
        $this->forge->dropTable('bmdonationcampaign', true);
    }
}
