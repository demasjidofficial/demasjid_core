<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BmdonationtypeModel;
use App\Modules\BaitulMal\Models\BmdonationtypeFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class BmdonationtypeController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\bmdonationtype\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/donationtype';
    protected $langModel = 'bmdonationtype';
    protected $modelName = 'App\Modules\Api\Models\BmdonationtypeModel';
    public function index()
    {
        return parent::index();
    }

    public function edit($id = null)
    {
        return parent::edit($id);
    }

    public function update($id = null)
    {
        return parent::update($id);
    }

    public function show($id = null)
    {
        return parent::show($id);
    }

    public function create()
    {
        return parent::create();
    }

    public function delete($id = null)
    {
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(BmdonationtypeFilter::class);
        return [
            'headers' => [
                'name' => lang('crud.name'),
                'description' => lang('crud.description'),
                'uom_name' => lang('crud.uom'),
                'state' => lang('crud.state')
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
            'baseRoute' => $this->getBaseRoute(),
            'showSelectAll' => true,
            'data' => $model->paginate(setting('App.perPage')),
            'pager' => $model->pager
        ];
    }

    protected function getDataEdit($id = null)
    {
        $dataEdit = parent::getDataEdit($id);
        $model = new BmdonationtypeModel();

        if(!empty($id)) {
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }

        $dataEdit['uomItems'] = ['' => 'Pilih Satuan'] + Arr::pluck(model('App\Modules\Api\Models\UomModel')->select(['id as key','name as text'])->asArray()->findAllExcludeJoin(), 'text', 'key');
        $dataEdit['stateItems'] = BmdonationtypeModel::listState();

        return $dataEdit;
    }
}
