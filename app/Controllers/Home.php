<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Traits\SiteProfile;

class Home extends WebsiteController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */

    use SiteProfile;
    public function index($slug_page = null)
    {

        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name', 'wilayah.nama as wilayah_nama'])->join('entity', 'entity.id = profile.entity_id')->join('wilayah', 'wilayah.kode = profile.desa_id', 'LEFT')->masjid()->asArray()->first();

        $isPage = false;
        $page_data =   [
            "path_image" => $profile['path_logo'] ?? ''
        ];

        // set site header footer data
        $data = $this->siteHeaderFooter();

        if (isset($slug_page)) {
            $page = model('App\Modules\Api\Models\SitepagesModel', false)->asArray()->findByslug($slug_page);
            if (isset($page) && count($page)) {
                $page_data = $page[0];
                $isPage = true;
                // load section of that page
                $data['sections'] = model('App\Modules\Api\Models\SitesectionsModel', false)->asArray()->findAllByPagerelease($page[0]['id']);
                // load slider of that page
                $data['sliders'] = model('App\Modules\Api\Models\SiteslidersModel', false)->asArray()->findAllByPagerelease($page[0]['id']);
            }
        }else {
            $data['articles']  = model('App\Modules\Api\Models\SitepostsModel', false)->asArray()->findAllByPagerelease(4);
            $data['sliders'] = model('App\Modules\Api\Models\SiteslidersModel', false)->asArray()->findAllByPagerelease();
        }
        
        // load widgets
        $this->siteWidgets();

        $masjid_profile = $profile;
        // get data of donation campaigns
        $donation_campaigns = (new BmdonationcampaignModel())->asArray()->findAll();

        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['donation_campaigns'] = $donation_campaigns;
        $data['widgets'] = service('widgets');
        $data['page'] = $page_data;
        $data['meta'] = meta_tag($masjid_profile["name"], $page_data);

        // render view
        // jika page dan home
        if ($isPage) {
            return $this->render('App\Modules\Website\Views\page', $data);
        } else {
            // to keep in home view but scroll to donation section
            $data['nav_header_donation'] = '#donasi';
            return $this->render('website_home', $data);
        }
    }
}
