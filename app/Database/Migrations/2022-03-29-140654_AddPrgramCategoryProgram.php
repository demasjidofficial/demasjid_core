<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPrgramCategoryProgram extends Migration
{
    public function up()
    {
        $this->forge->addColumn('program',[
            'program_category_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,     
            ],
            'CONSTRAINT fk_program_program_category_id FOREIGN KEY(`program_category_id`) REFERENCES `program_category`(`id`)'
        ]);
    }

    public function down()
    {
        $this->forge->dropForeignKey('program', 'fk_program_program_category_id');
        $this->forge->dropColumn('program', ['program_category_id']);
    }
}
