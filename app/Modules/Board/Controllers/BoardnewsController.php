<?php

namespace App\Modules\Board\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\BoardNewsModel;
use App\Modules\Board\Models\BoardNewsFilter;

class BoardNewsController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Board\Views\board_news\\';
    protected $baseRoute = 'admin/board/boardnews';
    protected $langModel = 'board_news';
    protected $modelName = 'App\Modules\Api\Models\BoardNewsModel';
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(BoardNewsFilter::class);
        return [
            'headers' => [
                'board_newsbg_id' => lang('crud.board_newsbg'),
                'board_newsruntext_id' => lang('crud.board_newsruntext'),
                'rawatib_schedule_id' => lang('crud.rawatib_schedule_id'),
                // 'created_by' => lang('crud.created_by')
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
        $model = new BoardNewsModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['board_newsbgItems'] = Arr::pluck(model('App\Modules\Api\Models\BoardNewsbgModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
    $dataEdit['board_newsruntextItems'] = Arr::pluck(model('App\Modules\Api\Models\BoardNewsruntextModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
    $dataEdit['rawatib_scheduleItems'] = Arr::pluck(model('App\Modules\Api\Models\RawatibScheduleModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }
}
