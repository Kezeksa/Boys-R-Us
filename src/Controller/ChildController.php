<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 09/11/17
 * Time: 15:23
 */

namespace Boysrus\Controller;


class ChildController extends Controller
{
    public function createNewAccount()
    {
        if (!empty($_POST['submitForm'])) {

            header('Location: ?route=childlogged');
            exit();
        }

        return $this->twig->render('Children/childrenConnect.html.twig');
    }

    public function chooseGift()
    {




    }

}
