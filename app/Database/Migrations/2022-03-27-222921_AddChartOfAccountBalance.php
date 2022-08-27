<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddChartOfAccountBalance extends Migration
{
    public function up()
    {
        $this->forge->addColumn('balance',[
            'chart_of_account_id' => [
                'type'       => 'int',
                'constraint' => 11,
                'unsigned'   => true,     
            ],
            'CONSTRAINT fk_balance_chart_of_account_id FOREIGN KEY(`chart_of_account_id`) REFERENCES `chart_of_account`(`id`)'
        ]);
    }

    public function down()
    {
        $this->forge->dropForeignKey('balance', 'fk_balance_chart_of_account_id');
        $this->forge->dropColumn('balance', ['chart_of_account_id']);
    }
}
