<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProgram extends Migration
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
                'type'          => 'varchar',
                'constraint'    => 50,
            ],
            'description' => [
                'type'          => 'text',
                'comment'       => 'deskripsi singkat program'
            ],
            'start_date' => [
                'type'          => 'date',
                'null'          => false,
            ],
            'end_date' => [
                'type'          => 'date',
                'null'          => false,
            ],
            'state' => [
                'type'          => 'varchar',
                'constraint'    => 20,
                'comment'       => 'valid value belum_mulai, berlangsung, batal, selesai'
            ],
            'created_at' => [
                'type'          => 'datetime',
                'null'          => false,
            ],
            'updated_at' => [
                'type'          => 'datetime',
                'null'          => false,
            ],
            'created_by' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('program', true);

    }

    public function down()
    {
        $this->forge->dropTable('program');
    }
}
