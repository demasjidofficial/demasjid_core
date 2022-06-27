<?php

namespace App\Modules\BaitulMal\Controllers;

use App\Controllers\AdminCrudController;
use IlluminateAgnostic\Arr\Support\Arr;
use App\Modules\Api\Models\DonasiModel;
use App\Modules\BaitulMal\Models\DonasiFilter;

class DonasiController extends AdminCrudController
{
    // protected $baseController = __CLASS__;
    // protected $viewPrefix = 'App\Modules\BaitulMal\Views\donasi\\';
    // protected $baseRoute = 'admin/baitulmal/donasi';
    // protected $langModel = 'donasi';
    // protected $modelName = 'App\Modules\Api\Models\DonasiModel';
    public function index(){
        // return parent::index();
        return $this->render('App\Modules\BaitulMal\Views\_submodules\donasis',[]);
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
        $model = model(DonasiFilter::class);
        return [
            'headers' => [
                'id_donatur' => lang('crud.id_donatur'),
                'id_pembayaran' => lang('crud.id_pembayaran'),
                'id_program' => lang('crud.id_program'),
                'dana_in' => lang('crud.dana_in'),
                'tgl_transaksi' => lang('crud.tgl_transaksi'),
                'bukti_pembayaran' => lang('crud.bukti_pembayaran'),
                'created_by' => lang('crud.created_by')
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
        $model = new DonasiModel();

        if(!empty($id)){
            $data = $model->find($id);
            if (null === $data) {
                return redirect()->back()->with('error', lang('Bonfire.resourceNotFound', [$this->langModel]));
            }
            $dataEdit['data'] = $data;
        }
            $dataEdit['donatur_typeItems'] = Arr::pluck(model('App\Modules\Api\Models\DonaturTypeModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
    $dataEdit['pembayaranItems'] = Arr::pluck(model('App\Modules\Api\Models\PembayaranModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
    $dataEdit['programItems'] = Arr::pluck(model('App\Modules\Api\Models\ProgramModel')->select(['id as key','name as text'])->asArray()->findAll(), 'text', 'key');
        return $dataEdit;
    }

    private function setupWidgets()
    {
        $widgets = service('widgets');

        $widgets->createWidget(Stats::class, 'schedule');
        $widgets->widget('schedule')
            ->createCollection('schedule')
        ;
    }
}
