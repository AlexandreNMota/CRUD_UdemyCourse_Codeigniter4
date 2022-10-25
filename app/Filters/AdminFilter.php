<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AdminFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $user = service('auth')->getCurrentUser();         // Usa auth para pegar o user atual

        if(! $user->is_admin){

            $response = service('response');

            $response->setStatusCode(403);       //Acesso ao URL é proibido

            $response->setBody('You do not have permission to access that resource');

            return $response;
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}