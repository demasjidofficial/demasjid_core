<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\BalanceModel;

class ReportDonaturController extends AdminCrudController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\report_donatur\\';
    protected $baseRoute = 'admin/masjid/reportdonation';    
    protected $modelName = 'App\Modules\Masjid\Models\ReportDonationModel';
    
    public function index(){
        return parent::index();        
    }    
    
    protected function getDataIndex()
    {
        $startDate = $this->request->getGet('start_date') ?? '2022-03-01'; 
        $endDate = $this->request->getGet('end_date') ?? '2022-03-30'; 
        $model = model($this->modelName);
        $model->masjid();
        $model->where("transaction_date between '$startDate' and  '$endDate'");
        $model->orderBy('transaction_date');
        return [
            'headers' => [    
                'no' => 'No',            
                'transaction_date' => lang('crud.transaction_date'),
                'description' => lang('crud.description'),
                'kelompok' => 'kelompok',
                'mutasi' => 'Mutasi',
                'amount' => lang('crud.amount'),                                
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
			'baseRoute' => $this->getBaseRoute(),            
            'data' => $model->findAll(),
            'actionUrl' => url_to($this->getBaseController()),
            'backUrl'   => url_to($this->getBaseController()),
        ];
        
    }        
}
