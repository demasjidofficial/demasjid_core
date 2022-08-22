<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Database;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Reader\Html;
use Psr\Log\LoggerInterface;

class ReportController extends AdminController
{
    use ResponseTrait;

    protected $theme = 'Admin';
    protected $viewPrefix = '';
    protected $baseController;
    protected $baseRoute;
    protected $langModel;

    /**
     * @var null|string The model that holding this resource's data
     */
    protected $modelName;

    /**
     * @var null|object The model that holding this resource's data
     */
    protected $model;

    protected $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);
        $this->setModel($this->modelName);
        helper(['form', 'number', 'app']);
    }

    /**
     * Display the uses currently in the system.
     *
     * @return string
     */
    public function index()
    {
        /** @var jabatanFilter $jabatanModel */
        // $jabatanModel = model(jabatanFilter::class);

        $view = $this->viewPrefix.($this->request->isAJAX() || $this->isHxRequest() ? '_table' : 'index');
        $dataIndex = $this->getDataIndex();
        $this->writeLog();

        return $this->render($view, $dataIndex);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param null|mixed $id
     *
     * @return array an array
     */
    public function show($id = null)
    {
        $record = $this->model->find($id);
        $this->writeLog();
        if (!$record) {
            return $this->failNotFound(sprintf(
                'item with id %d not found',
                $id
            ));
        }

        return $this->respond($record);
    }

    /**
     * Get the value of baseController.
     */
    public function getBaseController()
    {
        return $this->baseController;
    }

    /**
     * Set the value of baseController.
     *
     * @param mixed $baseController
     *
     * @return self
     */
    public function setBaseController($baseController)
    {
        $this->baseController = $baseController;

        return $this;
    }

    /**
     * Set or change the model this controller is bound to.
     * Given either the name or the object, determine the other.
     *
     * @param null|object|string $which
     */
    public function setModel($which = null)
    {
        if ($which) {
            $this->model = is_object($which) ? $which : null;
            $this->modelName = is_object($which) ? null : $which;
        }

        if (empty($this->model) && !empty($this->modelName) && class_exists($this->modelName)) {
            $this->model = model($this->modelName);
        }

        if (!empty($this->model) && empty($this->modelName)) {
            $this->modelName = get_class($this->model);
        }
    }

    /**
     * Get the value of baseRoute.
     */
    public function getBaseRoute()
    {
        return $this->baseRoute;
    }

    /**
     * Set the value of baseRoute.
     *
     * @param mixed $baseRoute
     *
     * @return self
     */
    public function setBaseRoute($baseRoute)
    {
        $this->baseRoute = $baseRoute;

        return $this;
    }

    /**
     * Get the value of viewPrefix.
     */
    public function getViewPrefix()
    {
        return $this->viewPrefix;
    }

    /**
     * Set the value of viewPrefix.
     *
     * @param mixed $viewPrefix
     *
     * @return self
     */
    public function setViewPrefix($viewPrefix)
    {
        $this->viewPrefix = $viewPrefix;

        return $this;
    }

    protected function getDataIndex()
    {
        return [];
    }

    protected function getDataEdit($id = null)
    {
        return [
            'actionUrl' => $id ? url_to($this->getBaseController(), $id) : url_to($this->getBaseController()),
            'backUrl' => url_to($this->getBaseController()),
        ];
    }

    protected function isHxRequest()
    {
        return $this->request->hasHeader('HX-Request');
    }

    protected function exportExcel($filename, $viewHtml)
    {
        $reader = new Html();
        $spreadsheet = $reader->loadFromString($viewHtml);

        $writer = IOFactory::createWriter($spreadsheet, 'Xls');        
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename="'.urlencode($filename).'"');
        $writer->save('php://output');
    }

    protected function exportPdf($filename, $viewHtml)
    {        
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
