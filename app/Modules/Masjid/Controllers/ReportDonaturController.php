<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\ReportController;
use App\Modules\Api\Models\EntityModel;
use CodeIgniter\I18n\Time;

class ReportDonaturController extends ReportController
{
    protected $baseController = __CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\report_donatur\\';
    protected $baseRoute = 'admin/masjid/reportdonation';
    protected $modelName = 'App\Modules\Masjid\Models\ReportDonationModel';

    public function index()
    {
        $view = $this->viewPrefix.'index';
        $dataIndex = $this->getDataIndex();
        $this->writeLog();
        $download = $this->request->getGet('download');
        if ($download) {
            $view = $this->viewPrefix.'index_pdf';            
            $viewHtml = $this->render($view, $dataIndex);
            
            switch ($download) {
                case 'pdf':                    
                    $filename = date('y-m-d-H-i-s').'-donatur.pdf';
                    $this->exportPdf($filename, $viewHtml);
                break;                
                case 'xls':
                    $filename = date('y-m-d-H-i-s').'-donatur.xls';              
                    $this->exportExcel($filename, $viewHtml);
                break;
            }

            return;
        }

        return $this->render($view, $dataIndex);
    }

    protected function getDataIndex()
    {
        $today = Time::today();
        $firstDateMonth = $today->format('Y-m').'-01';
        $firstNextMonth = Time::parse($firstDateMonth)->addMonths(1);
        $lastDateMonth = $firstNextMonth->subDays(1)->format('Y-m-d');
        $period = $this->request->getGet('period') ?? null;
        if ($period) {
            $period = explode(' - ', $period);
        }

        $startDate = $period[0] ?? $firstDateMonth;
        $endDate = $period[1] ?? $lastDateMonth;
        $model = model($this->modelName);
        $model->masjid();
        $model->where("transaction_date between '{$startDate}' and  '{$endDate}'");
        $model->orderBy('transaction_date');

        return [
            'headers' => [
                'no' => 'no',
                'transaction_date' => lang('crud.date'),
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
            'backUrl' => url_to($this->getBaseController()),
            'period' => $startDate.' - '.$endDate,
            'title' => [
                    'name' => $this->getIdentityInfo(),
                    'type' => 'Laporan Donatur',
                    'period' => 'Periode '.Time::parse($startDate)->format('d M Y').' sd '.Time::parse($endDate)->format('d M Y')
                ]
        ];
    }
    
    private function getIdentityInfo(){
        $entity = (new EntityModel())->masjid()->first();

        return $entity->name ?? 'Masjid not defined';
    }    
}
