<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\ReportController;
use App\Modules\Api\Models\BalanceModel;
use App\Modules\Api\Models\EntityModel;
use CodeIgniter\I18n\Time;

class ReportCashBankMutationController extends ReportController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\report_cashbankmutation\\';
    protected $baseRoute = ADMIN_AREA.'/masjid/reportcashbankmutation';
    protected $modelName = 'App\Modules\Masjid\Models\ReportCashBankMutationModel';

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
                    $filename = date('y-m-d-H-i-s').'-mutasi-kas-bank.pdf';
                    $this->exportPdf($filename, $viewHtml);
                    break;
                case 'xls':
                    $filename = date('y-m-d-H-i-s').'-mutasi-kas-bank.xls';
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
                'debit' => lang('crud.debit'),
                'credit' => lang('crud.credit'),
            ],
            'controller' => $this->getBaseController(),
            'viewPrefix' => $this->getViewPrefix(),
            'baseRoute' => $this->getBaseRoute(),
            'data' => $model->findAll(),
            'actionUrl' => url_to($this->getBaseController()),
            'backUrl' => url_to($this->getBaseController()),
            'period' => $startDate.' - '.$endDate,
            'startBalance' => $this->getStartBalance($startDate),
            'title' => [
                    'name' => $this->getIdentityInfo(),
                    'type' => 'Laporan Mutasi Kas dan Bank',
                    'period' => 'Periode '.Time::parse($startDate)->format('d M Y').' sd '.Time::parse($endDate)->format('d M Y')
                ]
        ];
    }

    private function getStartBalance($startDate)
    {
        $balance = (new BalanceModel())->selectSum('amount', 'saldo')->where('transaction_date <', $startDate)->first();

        return $balance->saldo ?? 0;
    }
    private function getIdentityInfo()
    {
        $entity = (new EntityModel())->masjid()->first();

        return $entity->name ?? 'Masjid not defined';
    }
}
