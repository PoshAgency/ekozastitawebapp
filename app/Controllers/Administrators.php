<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;

class Administrators extends BaseController
{
    use ResponseTrait;
    
    public function index()    // ekozastita_app.site/reports
    {         
        echo view('administrators/index_view');
    }

    public function show()    // ekozastita_app.site/reports/show
    {         
        echo view('administrators/show_view');
    }

    public function edit()    // ekozastita_app.site/reports/edit
    {         
        echo view('administrators/edit_view');
    }
}