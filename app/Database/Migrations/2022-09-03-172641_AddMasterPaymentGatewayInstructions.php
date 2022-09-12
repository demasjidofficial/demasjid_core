<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMasterPaymentGatewayInstructions extends Migration
{
    public function up()
    {
        $this->forge->addColumn('master_paymentgateway',[
            'instr' => [
                'type'       => 'text',
            ]   
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('master_paymentgateway', ['instr']);
    }
}
