<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use CodeIgniter\I18n\Time;
use Dompdf\Dompdf;

class ReportBalanceSheetController extends AdminCrudController
{
    protected $baseController = '\\'.__CLASS__;
    protected $viewPrefix = 'App\Modules\Masjid\Views\report_balancesheet\\';
    protected $baseRoute = ADMIN_AREA.'/masjid/reportbalancesheet';
    protected $modelName = 'App\Modules\Masjid\Models\ReportBalanceSheetModel';

    /*
    public function index(){
        return parent::index();
        //return $this->render('App\Modules\Masjid\Views\report_balancesheet',[]);
    }
    */

    public function index()
    {
        $view = $this->viewPrefix.($this->request->isAJAX() || $this->isHxRequest() ? '_table' : 'index');
        $dataIndex = $this->getDataIndex();
        $this->writeLog();
        $download = $this->request->getGet('download');
        if ($download) {
            // $viewHtml = $this->render($view, $dataIndex);
            switch($download) {
                case 'pdf':
                    $viewHtml = '<div>tess</div>';
                    $this->generate($viewHtml);
                    break;
                case 'xls':
                    //$viewHtml = '<div>tess</div>';
                    //$this->generate($viewHtml);
                    break;
            }
            return;
        }
        return $this->render($view, $dataIndex);
    }

    public function generate($viewHtml)
    {
        $filename = date('y-m-d-H-i-s').'-qadr-labs-report';
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        // load HTML content
        $dompdf->loadHtml($viewHtml);
        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4');
        // render html as PDF
        $dompdf->render();
        // output the generated pdf
        $dompdf->stream($filename);
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
            'backUrl' => url_to($this->getBaseController()),
            'period' => $startDate.' - '.$endDate,
        ];
    }
}
