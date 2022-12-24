<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SetupSeeder extends Seeder
{
	
    public function run()
    {
        $this->call(SuperAdmin::class);
        $this->call(PeriodeSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(DonaturKategoriSeeder::class);        
        $this->call(PaymentCategorySeeder::class);
        $this->call(SiteFooterSeeder::class);
        $this->call(SiteMenusSeeder::class);
        $this->call(EntitySeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(WilayahSeeder::class);
        // $this->call(BmDonationCampaignSeeder::class);
    }
	
}
