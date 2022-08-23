<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterTableDonasi extends Migration
{
    public function up()
    {
        // $this->db->disableForeignKeyChecks();

        // $fields = array(
        //     'id_program' => array(
        //                             'name'           => 'id_campaign',
        //                             'type'           => 'int',
        //                             'constraint'     => 11,
        //                             'unsigned'       => true,
        //                         ),
        // );
        // $this->forge->modifyColumn('donasi', $fields); 
        // $this->forge->addForeignKey('id_campaign', 'campaigns', 'id');     

        // $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        // $this->forge->dropColumn('donasi', ['id_campaign']);
    }
}
