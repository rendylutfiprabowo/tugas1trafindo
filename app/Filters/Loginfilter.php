<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Loginfilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (!session('role_user')) {
            return redirect()->to(site_url('Login'));
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
