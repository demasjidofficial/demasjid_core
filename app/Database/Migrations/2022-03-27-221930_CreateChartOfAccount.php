<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateChartOfAccount extends Migration
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
            'code' => [
                'type'          => 'varchar',
                'constraint'    => 10,
                'null'          => true,
            ],
            'name' => [
                'type'          => 'varchar',
                'constraint'    => 60,
            ],
            'group_account' => [
                'type'          => 'varchar',
                'constraint'    => 60,
                'comment'       => 'Aset lancar,Aset tidak lancar,Ekuitas/Kewajiban,Aset neto'
            ],
            'entity_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
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
        $this->forge->addForeignKey('entity_id', 'entity', 'id');
        $this->forge->createTable('chart_of_account', true);
    }

    public function down()
    {
        $this->forge->dropTable('chart_of_account');
    }
}
