<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\ProgramModel;
use App\Modules\Masjid\Models\ProgramFilter;
use IlluminateAgnostic\Arr\Support\Arr;

class ProgramController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\program\\';
    protected $baseRoute = 'admin/masjid/program';
    protected $langModel = 'program';
    protected $modelName = 'App\Modules\Api\Models\ProgramModel';
    public function index(){
        return parent::index();
    }

    public function edit($id = null){
        return parent::edit($id);
    }

    public function update($id = null){
        list($startDate, $endDate) = explode(' - ',$this->request->getPost('period'));
        $this->model->set('start_date', $startDate);
        $this->model->set('end_date', $endDate);
        return parent::update($id);
    }

    public function show($id = null){
        return parent::show($id);
    }

    public function create(){
        list($startDate, $endDate) = explode(' - ',$this->request->getPost('period'));
        $this->model->set('start_date', $startDate);
        $this->model->set('end_date', $endDate);
        return parent::create();
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(ProgramFilter::class);
        return [
            'headers' => [
                'start_date' => lang('crud.start_date'),
                'end_date' => lang('crud.end_date'),
                'name' => lang('crud.name'),
                'description' => lang('crud.program_description'),                
                'state' => lang('crud.state'),                
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
        $model = new ProgramModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $data->period = $data->start_date.' - '.$data->end_date;
            $dataEdit['data'] = $data;            
        }
        $dataEdit['stateItems'] = ProgramModel::listState();
        
        return $dataEdit;
    }
}
