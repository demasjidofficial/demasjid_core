<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CoaMasjidSeeder extends Seeder
{
    public function run()
    {
        $sql = <<<'SQL'
                    INSERT INTO chart_of_account (`code`,`name`,`group_account`,`entity_id`) VALUES 
				  ('100000','Aset Lancar','assets',1),
				  ('10000011','Kas','cash_bank',1),
				  ('10000012','Bank','cash_bank',1),
				  ('200000','Aset Tidak Lancar','assets',1),					
				  ('300000','Liabilitas','liability',1), 
				  ('30000011','Liabilitas Jangka Pendek','liability',1),
				  ('30000012','Liabilitas Jangka Panjang','liability',1),
				  ('30000013','Rekening Perantara','liability',1),
				  ('30000014','Aset Neto Tidak Terikat','liability',1),
				  ('400000','Penerimaan','revenues',1),
				  ('40000011','Donatur Tetap','revenues',1),
				  ('40000012','Donatur Tidak Tetap','revenues',1),
				  ('40000013','Donatur Tetap Tahun Lalu','revenues',1),
				  ('40000014','Donatur Tidak Tetap Tahun Lalu','revenues',1),
				  ('500000','Pengeluaran','expenses',1),
				  ('50000011','Operasional','expenses',1),
				  ('5000001101','Acara/Kegiatan','expenses',1),
				  ('5000001102','Barang Cetakan','expenses',1),
				  ('5000001103','Obat2an','expenses',1),
				  ('5000001104','Kebersihan','expenses',1),
				  ('5000001105','Honor','expenses',1),
				  ('5000001105','Mukafaah','expenses',1),
				  ('5000001106','Konsumsi','expenses',1),
				  ('5000001107','Peralatan & Perlengkapan','expenses',1),
				  ('5000001108','Munaqosah','expenses',1),
				  ('50000012','Non Operasional','expenses',1),
				  ('50000013','Penerimaan Non Operasional','expenses',1),
				  ('5000001301','Bonus Bank','expenses',1),
				  ('50000014','Pengeluaran Non Operasional','expenses',1),
				  ('5000001401','Biaya Bank','expenses',1),
				  ('5000001109','Pembangunan','expenses',1)
            SQL;

        $this->db->query($sql);
    }
}
