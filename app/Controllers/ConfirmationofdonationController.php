<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Traits\SiteProfile;


class ConfirmationofdonationController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */

    use SiteProfile;
    const BLANK_IMG = 'assets/admin/images/blank.jpg';
    public function ConfirmView()
    {
        
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name', 'wilayah.nama as wilayah_nama'])->join('entity','entity.id = profile.entity_id')->join('wilayah', 'wilayah.kode = profile.desa_id', 'LEFT')->masjid()->asArray()->first();
        $masjid_profile = $profile;
        
        // set site header footer data
        $data = $this->siteHeaderFooter();
        // load widgets
        $this->siteWidgets();
        
        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['widgets'] = service('widgets');   
        $data['meta'] = meta_tag($masjid_profile["name"]); 
        $data['blank_img'] = self::BLANK_IMG;
        
        $no_inv = current_url(true)->getQuery();
        $data['no_inv'] = (isset($no_inv)) ? substr($no_inv, 0 , -1) : $no_inv;
        // render view
        return $this->render('\App\Views\Campaign\confirm', $data);
    }
}
