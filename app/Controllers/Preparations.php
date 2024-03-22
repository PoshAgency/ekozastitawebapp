<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;

class Preparations extends BaseController
{
    use ResponseTrait;
    
    public function index()    // ekozastita_app.site/reports
    {         
        echo view('preparations/index_view');
    }

    public function show()    // ekozastita_app.site/reports/show
    {         
        echo view('preparations/show_view');
    }

    public function edit()    // ekozastita_app.site/reports/edit
    {         
        echo view('preparations/edit_view');
    }
}