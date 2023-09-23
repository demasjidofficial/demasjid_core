<?php

namespace App\Controllers;

use App\Modules\Api\Models\ProfileModel;
use CodeIgniter\HTTP\Response;
use App\Modules\Api\Models\BmdonationcampaignModel;
use App\Modules\Api\Models\PaymentMethodModel;
use App\Traits\SiteProfile;

class CheckoutController extends BaseController
{
    /**
     * Displays the initial page that visitors
     * see at the root of the site.
     *
     * @return string
     */

    use SiteProfile;
    public function CheckoutView()
    {
        $CATEGORY_BANK = 1;
        $CATEGORY_PAYMENT_GATEWAY = 2;


        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name', 'wilayah.nama as wilayah_nama'])->join('entity', 'entity.id = profile.entity_id')->join('wilayah', 'wilayah.kode = profile.desa_id', 'LEFT')->masjid()->asArray()->first();
        $masjid_profile = $profile;

        // set site header footer data
        $data = $this->siteHeaderFooter();
        // load widgets
        $this->siteWidgets();

        $uri = current_url(true);

        // get data of donation campaigns
        $donation_campaigns = (new BmdonationcampaignModel())->asArray()->find((int)$uri->getSegment(3));
        if (!isset($donation_campaigns)) {
            return redirect()->to('/');
        }

        $paymentListBank = (new PaymentMethodModel())->select('payment_method.id, payment_method.rek_no, payment_method.rek_name, master_bank.path_logo, master_bank.name')->where(['payment_category_id' => $CATEGORY_BANK, 'isActived' => 1])->join('master_bank', 'master_bank.id = payment_method.master_payment_id')->asArray()->find();
        $paymentListPayGat = (new PaymentMethodModel())->select('payment_method.id, payment_method.rek_no, payment_method.rek_name, master_paymentgateway.path_logo, master_paymentgateway.name')->where(['payment_category_id' => $CATEGORY_PAYMENT_GATEWAY, 'isActived' => 1])->join('master_paymentgateway', 'master_paymentgateway.id = payment_method.master_payment_id')->asArray()->find();

        // passing data to view
        $data['masjid_profile'] = $masjid_profile;
        $data['donation_campaigns'] = $donation_campaigns;
        $data['widgets'] = service('widgets');
        $data['meta'] = meta_tag($masjid_profile["name"], [
            "meta_title" => $donation_campaigns['name'],
            "meta_desc" => $donation_campaigns['description'],
            "path_image" => $donation_campaigns["path_image"]
        ]);
        $data['actionUrl'] = site_url('/admin/baitulmal/donation/');
        $data['paymentListBank'] = $paymentListBank;
        $data['paymentListPayGat'] = $paymentListPayGat;

        // render view
        return $this->render('\App\Views\Campaign\checkout', $data);
    }
}
