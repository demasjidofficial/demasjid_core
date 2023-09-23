<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateRawatibSchedule extends Migration
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
                'constraint' => 15,
            ],
            'pray_time' => [
                'type'       => 'time'
            ],
            'is_automatic' => [
                'type' => 'boolean',
                'default' => false
            ],
            'imam_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->addForeignKey('imam_id', 'imam', 'id');
        $this->forge->createTable('rawatib_schedule', true);
    }

    public function down()
    {
        $this->forge->dropTable('rawatib_schedule', true);
    }
}
