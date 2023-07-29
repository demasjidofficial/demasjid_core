<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAssetEntity extends Migration
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
                'constraint'    => 80,
            ],
            'purchased_date' => [
                'type'          => 'date',
                'null'          => false,
            ],
            'purchased_price' => [
                'type'       => 'bigInt',
                'unsigned'   => true,
                'null'       => false,
            ],
            'estimated_price' => [
                'type'       => 'bigInt',
                'unsigned'   => true,
                'null'       => false,
            ],            
            'entity_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
            ],
            'description'  => [
                'type'     => 'varchar',
                'constraint' => 255, 
                'null'       => true,
            ], 
            'path_image' => [
                'type'       => 'varchar',
                'constraint' => 255,
                'null'       => true,
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
        $this->forge->createTable('asset', true);

    }

    public function down()
    {
        $this->forge->dropTable('asset');
    }
}
