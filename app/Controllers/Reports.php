<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;

class Reports extends BaseController
{
    use ResponseTrait;
    
    public function index()    // ekozastita_app.site/reports
    {         
        echo view('reports/index_view');
    }

    public function show()    // ekozastita_app.site/reports/show
    {         
        echo view('reports/show_view');
    }

    public function edit()    // ekozastita_app.site/reports/edit
    {         
        echo view('reports/edit_view');
    }
}