<?php

namespace App\Controllers;

class Helloworld extends BaseController
{
    public function index()
    {
        echo "Hola Mundo!!!";
    }

    public function comentar($comment,$n)
    {
        for ($i=0; $i < $n; $i++) { 
            echo $i . ' ' . $comment . '<br>';
        }
    }
}
