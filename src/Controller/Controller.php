<?php

namespace Boysrus\Controller;

class Controller
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../View');
        $this->twig = new \Twig_Environment($loader, array(
        ));
    }

    /**
     * @return \Twig_Environment
     */
    public function getTwig(): \Twig_Environment
    {
        if ($this->twig === null) {
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../View');
            $this->twig = new \Twig_Environment($loader, array(
                'cache' => false,
            ));
        }

        return $this->twig;
    }



    /**
     * @param string $view
     * @param array $args_tab
     * @return string
     */
    public function render(string $view, array $args_tab = [])
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $args = [
            'message' => $_SESSION['message'],
            'message_title' => $_SESSION['message_title'],
            'message_type' => $_SESSION['message_type'],
        ];
        $args_tab = array_merge($args_tab, $args);

        $view = $this->getTwig()->render($view, $args_tab);
        return $view;
    }
}
