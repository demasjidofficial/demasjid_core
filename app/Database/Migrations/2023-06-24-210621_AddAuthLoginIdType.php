<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddAuthLoginIdType extends Migration
{
    public function up()
    {
        $db = db_connect();

        $fields = $db->getFieldNames('auth_logins');
        if (! in_array('id_type', $fields)) {
            $this->forge->addColumn('auth_logins',[
                'id_type' => [
                    'type'       => 'varchar',
                    'constraint' => 255,
                    'after'      => 'user_agent'
                ],
                'identifier' => [
                    'type'       => 'varchar',
                    'constraint' => 255,
                    'before'     => 'user_id'             
                ],
            ]);
        }        
    }

    public function down()
    {
        $this->forge->dropColumn('auth_logins', ['id_type', 'identifier']);
    }
}
