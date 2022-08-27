<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddForeignkeyCategoryUom extends Migration
{
    public function up()
    {
        //
        
        $this->forge->dropColumn('uom', ['uomcategory_id']);
        $this->forge->addColumn('uom', [
            'uomcategory_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ],
                'CONSTRAINT fk_uom_category_id FOREIGN KEY(`uomcategory_id`) REFERENCES `uom_category`(`id`)'
            ]);
    }

    public function down()
    {
        //
        $this->forge->dropForeignKey('uom', 'fk_uom_category_id');
        $this->forge->dropColumn('uom', ['uomcategory_id']);
        $this->forge->addColumn('uom',[
            'uomcategory_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,
                'null'       => true,
            ]
        ]);
    }
}
