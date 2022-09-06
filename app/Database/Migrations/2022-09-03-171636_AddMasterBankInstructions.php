<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMasterBankInstructions extends Migration
{
    public function up()
    {
        $this->forge->addColumn('master_bank',[
            'instr_atm' => [
                'type'       => 'text',
            ], 
            'instr_mbanking' => [
                'type'       => 'text',
            ],     
            'instr_ibanking' => [
                'type'       => 'text',
            ],    
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('master_bank', ['instr_atm', 'instr_mbanking', 'instr_ibanking']);
    }
}
