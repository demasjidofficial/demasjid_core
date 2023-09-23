<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddContactAddressPengurus extends Migration
{
    public function up()
    {
        $this->forge->addColumn('pengurus', [
            'provinsi_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true
            ],
            'kota_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,
            ],
            'kecamatan_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,
            ],
            'desa_id' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true
            ],
            'address' => [
                'type'       => 'varchar',
                'constraint' => 100,
                'null'       => true,
                'after'      => 'jabatan_id'
            ],
            'telephone' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'null'       => true,
                'after'      => 'address'
            ],
            'email' => [
                'type'       => 'varchar',
                'constraint' => 35,
                'null'       => true,
                'after'      => 'telephone'
            ],
        ]);

        $this->forge->addColumn('pengurus', [
            'entity_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                ],
                'CONSTRAINT fk_pengurus_entity_id FOREIGN KEY(`entity_id`) REFERENCES `entity`(`id`)'
            ]);
    }

    public function down()
    {
        $this->forge->dropForeignKey('pengurus', 'fk_pengurus_entity_id');
        $this->forge->dropColumn('pengurus', ['provinsi_id', 'kota_id', 'kecamatan_id', 'desa_id', 'address', 'telephone', 'email', 'entity_id']);
    }
}
