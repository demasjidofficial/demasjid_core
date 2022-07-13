<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterPaymentidinDonasi extends Migration
{
    public function up()
    {
        $this->forge->addColumn('donasi',[
        'CONSTRAINT FOREIGN KEY(id_pembayaran) REFERENCES payment_method(id)'
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('donasi', ['id_pembayaran']);
    }
}
