<?php

namespace App\Modules\Board\Controllers;
use App\Modules\Api\Models\ProfileModel;
use App\Modules\Api\Models\RawatibScheduleModel;
use App\Modules\Api\Models\BoardNewsRuntextModel;
use App\Modules\Api\Models\BoardNewsBgModel;

use App\Controllers\BaseController;

class BoardnewsTVController extends BaseController
{
    protected $theme = 'Board';

    public function index()
    {
        $profile = (new ProfileModel())->setSelectColumn(['profile.*','entity.name'])->join('entity','entity.id = profile.entity_id')->masjid()->asArray()->first();
        $sholat = (new RawatibScheduleModel())->asArray()->find();
        $run_text = (new BoardNewsRuntextModel())->asArray()->find();
        $bgboard = (new BoardNewsBgModel())->asArray()->find();

        $data['masjid_profile'] = $profile;
        $data['rawatib_schedule'] = $sholat;
        $data['board_news_runtext'] = $run_text;
        $data['board_news_bg'] = $bgboard;
        return $this->render('App\Modules\Board\Views\boardnewstv\index',$data);
    }
}
