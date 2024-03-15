<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Controller;

class Home extends BaseController
{
	use ResponseTrait;

    public function index()
    {
        if(NULL === session("user")){
            return redirect()->to('/login');
        }

        $data = [];

		echo view('home_view', $data);
    }
}
