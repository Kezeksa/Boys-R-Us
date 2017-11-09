<?php

namespace Boysrus\Controller;

use Boysrus\Model\GiftManager;


class ChildController extends Controller
{
    public function createNewAccount()
    {
        if (!empty($_POST['submitForm1'])) {

            session_destroy();
            session_start();
            $_SESSION['formPseudo'] = $_POST['formPseudo'];

            header('Location: ?route=childlogged');
            exit();
        }

        if (!empty($_POST['submitForm'])) {

            session_destroy();
            session_start();
            $_SESSION['formPseudo1'] = $_POST['formPseudo1'];

            header('Location: ?route=childlogged');
            exit();
        }
        return $this->twig->render('Children/childrenConnect.html.twig');
    }


    public function chooseGift()
    {

        $gift='';
        if (isset($_POST['submitGift'])) {
            var_dump($_POST);
            $giftManager = new GiftManager();
            $gift = $giftManager->insert($_POST['giftWanted']);
        }

        return $this->twig->render('Children/childrenRequest.html.twig', [
            'session' => $_SESSION,
            'gift' => $gift,
        ]);
    }
}
