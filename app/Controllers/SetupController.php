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
    
    public function migrateInstall(){
        ini_set('max_execution_time', 0);
        print(command('migrate --all'));    
    }

    public function migrate(){
        ini_set('max_execution_time', 0);
        print(command('migrate'));    
    }

    public function migrateRefresh(){
        ini_set('max_execution_time', 0);
        print(command('migrate:refresh'));
    }

    public function seed(){
        $seedFile = $this->request->getGet('seeder') ?? 'SetupSeeder';
        ini_set('max_execution_time', 0);
        try {
            command('db:seed '.$seedFile);
            echo 'setup file '.$seedFile.' seeder success ';
        } catch (\Exception $e) {
            echo $e->getMessage();
        }                
    }

}
