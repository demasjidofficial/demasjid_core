<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddIsActiveIsDeletedPaymentMethod extends Migration
{
    public function up()
    {
        $this->forge->addColumn('payment_method',[
            'isActived' => [
                'type'       => 'int',
                'constraint' => 1,
                'default' => 1
            ],      
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('payment_method', ['isActived']);
    }
}
