<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Libraries\Widgets\Stats\Stats;
use App\Libraries\Widgets\Stats\StatsItem;
use App\Modules\Api\Models\SitesocialsModel;
use App\Modules\Api\Models\DonasiModel;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Modules\Api\Models\PaymentMethodModel;
use App\Modules\Api\Models\MasterBankModel;
use App\Modules\Api\Models\MasterPaymentgatewayModel;
use App\Modules\Api\Models\SitemenusModel;
use App\Modules\Api\Models\SitefooterModel;
use App\Traits\SiteProfile;

class InformatonofpaymentController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */

    use SiteProfile;
    public function InformationView()
    {

        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name', 'wilayah.nama as wilayah_nama'])->join('entity', 'entity.id = profile.entity_id')->join('wilayah', 'wilayah.kode = profile.desa_id', 'LEFT')->masjid()->asArray()->first();
        $masjid_profile = $profile;

        // set site header footer data
        $data = $this->siteHeaderFooter();
        // load widgets
        $this->siteWidgets();
        $uri = current_url(true);

        $donation = (new DonasiModel())->asArray()->findById((int)$uri->getSegment(3));
        if (!isset($donation)) {
            return redirect()->to('/');
        }

        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['donation'] = $donation;
        $data['widgets'] = service('widgets');
        $data['meta'] = meta_tag($masjid_profile["name"]);
        $data['actionUrl'] = site_url('/admin/baitulmal/donation/');

        // render view
        return $this->render('\App\Views\Campaign\informationofpayment', $data);
    }
}
