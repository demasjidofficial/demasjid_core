<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNameTelpEmailDonasi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('donasi',[
            'name' => [
                'type'       => 'varchar',
                'constraint' => 128,
                'null' => true
            ],      
            'email' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],
            'no_hp' => [
                'type' => 'varchar',
                'constraint' => 50,
                'null' => true
            ],  
            'pesan' => [
                'type' => 'varchar',
                'constraint' => 255,
                'null' => true
            ],        
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('donasi', ['name, email, no_hp', 'pesan']);
    }
}
