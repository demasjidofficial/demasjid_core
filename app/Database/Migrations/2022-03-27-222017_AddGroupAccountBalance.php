<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGroupAccountBalance extends Migration
{
    public function up()
    {
        $this->forge->addColumn('account_balance', [
            'group_account' => [
                'type'       => 'varchar',
                'constraint' => 15,
                'comment'    => 'kas, bank'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('account_balance', 'group_account');
    }
}
