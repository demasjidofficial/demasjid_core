<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterBuktipembayaraninDonasi extends Migration
{
    public function up()
    {
        $fields = [
            'bukti_pembayaran' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],   
            ];
    
            $this->forge->modifyColumn('donasi', $fields); 
    }

    public function down()
    {
        $this->forge->dropColumn('donasi', ['bukti_pembayaran']);
    }
}
