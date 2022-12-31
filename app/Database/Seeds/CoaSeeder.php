<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoaSeeder extends Seeder
{
	
    public function run()
    {        
        $data = [
            ['name' => 'Aset Lancar / Aktiva','code' => '10', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Kas','code' => '101', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Perlengkapan / Persediaan','code' => '102', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Piutang','code' => '103', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Aset Tidak Lancar / Passiva','code' => '12', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Tanah','code' => '120', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Gedung','code' => '121', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Peralatan Masjid','code' => '122', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Penyusutan Peralatan Masjid','code' => '123', 'group_account' => 'Aset','entity_id' => 1],
            ['name' => 'Kewajiban Lancar','code' => '20', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Gaji','code' => '201', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Operasional','code' => '202', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Pembangunan','code' => '203', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Lain-lain','code' => '204', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Kewajiban Tidak Lancar','code' => '22', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Tanah','code' => '221', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Gedung','code' => '222', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Utang Bank / Koperasi Syariah','code' => '223', 'group_account' => 'Liabilitas / Kewajiban','entity_id' => 1],
            ['name' => 'Modal','code' => '301', 'group_account' => 'Ekuitas / Modal','entity_id' => 1],
            ['name' => 'Prive','code' => '302', 'group_account' => 'Ekuitas / Modal','entity_id' => 1],
            ['name' => 'Pendapatan Langsung','code' => '40', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Kotal Amal','code' => '401', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Donasi','code' => '402', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Fundraising','code' => '403', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Layanan','code' => '404', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Pendapatan Tidak Langsung','code' => '42', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Hibah','code' => '421', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Wakaf','code' => '422', 'group_account' => 'Pendapatan','entity_id' => 1],
            ['name' => 'Beban Operasional','code' => '50', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Beban Gaji','code' => '501', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Beban Pemeliharaan','code' => '502', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Beban Barang','code' => '503', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Beban Layanan / Jasa','code' => '504', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Beban Penyusutan','code' => '505', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Beban Lain-lain','code' => '506', 'group_account' => 'Beban','entity_id' => 1],
            ['name' => 'Bank','code' => '60', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'BSI','code' => '601', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'Muamalat','code' => '602', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'BCA','code' => '603', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'Mandiri','code' => '604', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'BNI','code' => '605', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'BTPN','code' => '606', 'group_account' => 'Kas & Bank','entity_id' => 1],
            ['name' => 'BRI','code' => '607', 'group_account' => 'Kas & Bank','entity_id' => 1],


        ];

        $this->db->table('chart_of_account')->insertBatch($data);
    }	
}
