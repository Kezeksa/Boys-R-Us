<?php

namespace Boysrus\Controller;

class Controller
{
    protected $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../View');
        $this->twig = new \Twig_Environment($loader, array(
            'cache' => true,
            'cache' => '../src/cache/',
        ));
    }
}
