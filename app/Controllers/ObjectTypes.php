<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;

class ObjectTypes extends BaseController
{
    use ResponseTrait;
    
    public function index()    // ekozastita_app.site/reports
    {         
        echo view('objecttypes/index_view');
    }

    public function show()    // ekozastita_app.site/reports/show
    {         
        echo view('objecttypes/show_view');
    }

    public function edit()    // ekozastita_app.site/reports/edit
    {         
        echo view('objecttypes/edit_view');
    }
}