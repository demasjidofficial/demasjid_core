<?php

namespace App\Modules\Board\Controllers;

use App\Modules\Api\Models\ProfileModel;
use App\Modules\Api\Models\RawatibScheduleModel;
use App\Modules\Api\Models\BoardNewsRuntextModel;
use App\Modules\Api\Models\BoardNewsBgModel;
use App\Modules\Api\Models\EntityModel;
use App\Modules\Api\Models\WilayahModel;
use IlluminateAgnostic\Arr\Support\Arr;

use App\Controllers\BaseController;
use App\Modules\Api\Entities\Profile;

class BoardnewsTVController extends BaseController
{
    protected $theme = 'Board';

    public function index()
    {
        // $profile = (new ProfileModel())->setSelectColumn(['profile.*', 'entity.name'])->join('entity', 'entity.id = profile.entity_id')->masjid()->asArray()->first();
        $profile = (new ProfileModel())->masjid()->asArray()->first();
        $sholat = (new RawatibScheduleModel())->asArray()->find();
        $run_text = (new BoardNewsRuntextModel())->asArray()->find();
        $bgboard = (new BoardNewsBgModel())->asArray()->find();

        $wilayah = collect((new WilayahModel())->extractWilayah($profile['desa_id'])->asArray()->findAll())->keyBy('kode');
        $extractWilayah = extractWilayah($profile['desa_id']);
        $provinsi_id = $extractWilayah['provinsi'];
        $kota_id = $extractWilayah['kota/kabupaten'];
        $kecamatan_id = $extractWilayah['kecamatan'];


        $data['desa'] = $wilayah[$profile['desa_id']]['nama'];
        $data['kecamatan'] = $wilayah[$kecamatan_id]['nama'];
        $data['kota'] = $wilayah[$kota_id]['nama'];
        $data['provinsi'] = $wilayah[$provinsi_id]['nama'];
        $data['masjid_profile'] = $profile;
        $data['rawatib_schedule'] = $sholat;
        $data['board_news_runtext'] = $run_text;
        $data['board_news_bg'] = $bgboard;
        return $this->render('App\Modules\Board\Views\boardnewstv\index', $data);
    }
}
