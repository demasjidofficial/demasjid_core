<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateBoardNewsBg extends Migration
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
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
            ],
            'duration' => [
                'type'       => 'int',
                'constraint' => 5,
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
        $this->forge->createTable('board_news_bg', true);
    }

    public function down()
    {
        $this->forge->dropTable('board_news_bg', true);
    }
}
