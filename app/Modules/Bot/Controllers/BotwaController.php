<?php

namespace App\Modules\Bot\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\SettingsModel;
use App\Modules\Settings\Models\SettingsFilter;

class BotwaController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Bot\Views\botwhatsapp\\';
    protected $baseRoute = ADMIN_AREA.'/bot/easywa';
    protected $langModel = 'botwhatsapp';

    public function index()
    {

        return parent::index();
    }

    protected function getDataIndex()
    {
        $whatsapp = (new SettingsModel())->where(['key' => 'whatsapp','class' => 'bot'])->first();
        return [
            'number_whatsapp' => $whatsapp->value ?? null,
            'url_whatsapp' => env('app.whatsappUrl')
        ];
    }
}
