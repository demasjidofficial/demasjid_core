<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class SetupController extends Controller
{        
    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
    }

    public function migrate(){
        ini_set('max_execution_time', 0);
        command('migrate --all -f');
        echo 'migration success';
    }

    public function migrateRefresh(){
        ini_set('max_execution_time', 0);
        command('migrate:refresh --all -f');
        echo 'migration success';
    }

    public function seed(){
        ini_set('max_execution_time', 0);
        command('db:seed SetupSeeder');
        echo 'setup seeder success';
    }

}
