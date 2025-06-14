<?php namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use Config\Services;

class Auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // jika user belum login
        $session = \Config\Services::session();
        if(! session()->get('logged_in')){
            return redirect()->to('/user/login');
        }
    }
    public function after(RequestInterface $request, ResponseInterface
        $response, $arguments = null)
    {
        // $session = \Config\Services::session();
        
    }
    
}