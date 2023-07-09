<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Modules\Api\Models\DonasiModel;
use App\Traits\SiteProfile;


class CampaignsPageController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */

    use SiteProfile;
    public function CampaignView()
    {
        
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name', 'wilayah.nama as wilayah_nama'])->join('entity','entity.id = profile.entity_id')->join('wilayah', 'wilayah.kode = profile.desa_id', 'LEFT')->masjid()->asArray()->first();
        $masjid_profile = $profile;

        // set site header footer data
        $data = $this->siteHeaderFooter();
         // load widgets
        $this->siteWidgets();
     
        $uri = current_url(true);
        $campaign_id = (int)$uri->getSegment(3);

        // get data of donation campaigns
        $donation_campaigns = (new BmdonationcampaignModel())->asArray()->find($campaign_id);
        if (!isset($donation_campaigns)) return redirect()->to('/'); 
        
        $donation_list = (new DonasiModel())->where(['campaign_id' => $campaign_id, 'state' => 1])->orderBy('updated_at', 'DESC')->find();

        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['donation_campaigns'] = $donation_campaigns;
        $data['donation_list'] = $donation_list;
        $data['widgets'] = service('widgets');   
        $data['meta'] = meta_tag($masjid_profile["name"], 
            [
                "meta_title" => $donation_campaigns['name'],
                "meta_desc" => $donation_campaigns['description'],
                "path_image" => $donation_campaigns["path_image"]
            ]
        ); 

        // render view
        return $this->render('\App\Views\Campaign\campaign', $data);
    }
}
