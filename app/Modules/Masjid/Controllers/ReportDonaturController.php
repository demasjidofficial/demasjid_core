<?php

namespace App\Modules\Masjid\Controllers;

use App\Controllers\AdminCrudController;
use App\Modules\Api\Models\EntityModel;
use CodeIgniter\I18n\Time;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Reader\Html;
use PhpOffice\PhpSpreadsheet\IOFactory;

class ReportDonaturController extends AdminCrudController
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
                    $this->generate($viewHtml);
                break;                
                case 'xls':                    
                    $this->exportExcel($viewHtml);
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

    private function exportExcel($viewHtml)
    {
        $reader = new Html();
        $spreadsheet = $reader->loadFromString($viewHtml);

        $writer = IOFactory::createWriter($spreadsheet, 'Xls');
        $filename = date('y-m-d-H-i-s').'-qadr-labs-report.xls';
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'. urlencode($filename).'"');
        $writer->save('php://output');        
    }

    private function generate($viewHtml)
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
}
