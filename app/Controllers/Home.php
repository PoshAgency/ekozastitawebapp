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
        if ( !session()->has('isLogged')){
            return redirect()->to('login?return_url=' . current_url());
        }

        $data = [];
		echo view('home_view', $data);
    }
}
