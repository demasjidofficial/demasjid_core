<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\SitesocialsModel;
use App\Modules\Api\Models\BmdonationcampaignModel;

class CheckoutDonation extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */


    public function index($id)
    {
        helper(['form','number','app']);
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name'])->join('entity','entity.id = profile.entity_id')->masjid()->asArray()->first();
        $masjid_profile = $profile;
        
        // get data of masjid socials
        $masjid_socials = (new SitesocialsModel())->asArray()->findAll();
        
        // get data of activated languages
        $languages = [
            [
                'id' => 1,
                'code' => 'ID',
                'name' => 'indonesia',
                'path_icon' => '',
            ],
            [
                'id' => 2,
                'code' => 'SA',
                'name' => 'arab',
                'path_icon' => '',
            ],
            [
                'id' => 3,
                'code' => 'EN',
                'name' => 'english',
                'path_icon' => '',
            ],
        ];
        
        // get data of navigation menu
        $nav_menu = [
            [
                'id' => 1,
                'name' => 'home',
                'label' => 'Beranda',
                'parent' => 0,
            ],
            [
                'id' => 2,
                'name' => 'about',
                'label' => 'Tentang',
                'parent' => 0,
            ],
        ];

        // get data of donation campaigns
        $donation_campaigns = (new BmdonationcampaignModel())->asArray()->find($id=$id);
        
        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['masjid_socials'] = $masjid_socials;
        $data['donation_campaigns'] = $donation_campaigns;
        $data['languages'] = $languages;
        $data['nav_menu'] = $nav_menu;
        $data['widgets'] = service('widgets');        
        // render view
        return $this->render('Donation/checkout_donation', $data);
    }

}
