<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 09/11/17
 * Time: 15:19
 */

namespace Boysrus\Controller;


class HomeController extends Controller
{
    public function showHome()
    {
        return $this->twig->render('Home/home.html.twig');
    }
}