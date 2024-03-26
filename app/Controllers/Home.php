<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;
use App\Models\ReportsModel;

class Home extends BaseController
{
	use ResponseTrait;

    public function index()
    {
        $data = [];
		echo view('home_view', $data);
    }
}
