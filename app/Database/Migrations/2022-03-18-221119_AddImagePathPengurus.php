<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddImagePathPengurus extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pengurus',[
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
                'after'      => 'address'
            ],            
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('pengurus', ['path_image']);
    }
}
