<?php

namespace App\Filters;

use CodeIgniter\CLI\Console;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class RoleValidationFilter implements FilterInterface
{

    public $publicas = array(
        'user/login',
        'user/autenticate',
        'error/403'
    );

    public $rol_permisos = array(
        'ADMIN' => array('user','home'),
        'CLIENTE' => array('home'),
        'VENDEDOR' => array('home')
    );

    public $rol_no_puede = array(
        'ADMIN' => array(),
        'CLIENTE' => array('user','ventas'),
        'VENDEDOR' => array('user')
    );


    public function before(RequestInterface $request, $arguments = null)
    {
        $auth = session()->isLoggedIn;
        
        $uri_segments = explode('/',uri_string());

        $is_public = in_array(uri_string(), $this->publicas);

        if (!$auth && !$is_public ) {
            return redirect()->to('/user/login');
        }

        $role = session()->role;

        if ( $auth && !$is_public && !$this->validoURI($uri_segments, $role)) {
            return redirect()->to('/error/403');
        }

    }

    public function validoURI($segmentos, $role) {
        return in_array($segmentos[0], $this->rol_permisos[$role]);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}

?>