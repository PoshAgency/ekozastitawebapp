<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminAuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // User is logged?
        if ( ! session()->has('isLogged')){
            return redirect()->to('login?return_url=' . current_url());
        }
        // Check user priority (Config/Routes.php)
        if( is_array($arguments) && count($arguments) > 0 && !in_array( session()->get('priority'), $arguments) ) {
            session()->setFlashdata('msg', 'Nemate pristup prethodnoj strani.');
            return redirect('dashboard');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}