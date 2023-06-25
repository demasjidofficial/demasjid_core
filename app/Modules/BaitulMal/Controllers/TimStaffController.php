<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\TimStaffModel;
use App\Modules\Api\Models\TugasTimModel;
use App\Modules\BaitulMal\Models\TimStaffFilter_;
use IlluminateAgnostic\Arr\Support\Arr;

class TimStaffController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\BaitulMal\Views\tim_staff\\';
    protected $baseRoute = ADMIN_AREA.'/baitulmal/timstaff';
    protected $langModel = 'tim_staff';
    protected $modelName = 'App\Modules\Api\Models\TimStaffModel';
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
        $data = $this->request->getPost();
        $data['target_max'] = (float)(str_replace('.', '', $data['nominal_target']));
       

        if (!$this->model->insert($data)) {
            return redirect()->back()->withInput()->with('errors', $this->model->errors());
        }
        $this->writeLog();

        return redirect()->to(url_to($this->getBaseController()))->with('message', lang('Bonfire.resourceSaved', [$this->langModel]));
    }

    public function delete($id = null){
        return parent::delete($id);
    }

    protected function getDataIndex()
    {
        $model = model(TimStaffFilter_::class);
        return [
            'headers' => [
                                    'tim_id' => lang('crud.nama_tim'),
                'user_id' => lang('crud.staff_nama'),
      
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
        $model = new TimStaffModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
            $dataEdit['tugasItems'] = (new TugasTimModel())->where('staff_id', $data->user_id)->findAll();
        }
        $dataEdit['stateItems'] = TugasTimModel::listState();
        $dataEdit['timItems'] = ['' => 'Pilih Tim'] + Arr::pluck(model('App\Modules\Api\Models\TimFundraisingModel')->select(['tim_fundraising.id as key', 'tim_fundraising.nama_tim as text'])->asArray()->findAll(), 'text', 'key');
        $dataEdit['staffItems'] = ['' => 'Pilih Staff'] +Arr::pluck(model('App\Modules\Api\Models\UsersModel')->select(['id as key', 'username as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }


}
