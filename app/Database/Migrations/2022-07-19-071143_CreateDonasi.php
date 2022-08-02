<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDonasi extends Migration
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
            'donatur_id' => [
                'type'           => 'int',
                'constraint'     => 11,
                'unsigned'       => true,
                'null'           => true,
            ],
            'paymentmethod_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
            'campaign_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true, 
                'null'       => true,   
            ],        
            'dana_in' => [
                'type'       => 'int',
                'constraint' => 13,
                'unsigned'   => true,
            ],
            'date' => [
                'type'       => 'date'
            ], 
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'state' => [
                'type'       => 'int',
                'constraint' => 2,
                'default'    => 0,
                'null'       => true,
            ],          
            'created_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,   
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->addForeignKey('donatur_id', 'donatur', 'id');     
        $this->forge->addForeignKey('paymentmethod_id', 'payment_method', 'id');     
        $this->forge->addForeignKey('campaign_id', 'bmdonationcampaign', 'id');     
        $this->forge->createTable('donasi', true);
    }

    public function down()
    {
        $this->forge->dropTable('donasi', true);
    }
}
