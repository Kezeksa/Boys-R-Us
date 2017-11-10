<?php

namespace Boysrus\Controller;

use Boysrus\Model\ChildManager;
use Boysrus\Model\Children;
use Boysrus\Model\GiftManager;
use Boysrus\Model\Gifts;

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
        $gift = new Gifts;
        $child = new Children;

        $pseudo = $_SESSION['formPseudo1'];
        $childManager = new ChildManager();
        $giftManager = new GiftManager();

        if ($_SESSION['formPseudo1']) {
            $child->setUsername($pseudo);
            $variable = $childManager->loginifnotexist($pseudo);
            var_dump($variable);
        }

        $giftByChild = $giftManager->findGifts($pseudo);

        if (isset($_POST['submitGift'])) {
            $gift->setName($_POST['giftWanted']);
            $giftManager = new GiftManager();
            $gift = $giftManager->insert($gift);
        }

        return $this->twig->render('Children/childrenRequest.html.twig', [
            'session' => $_SESSION,
            'gifts' => $gift,
            'giftByChild' => $giftByChild,
        ]);
    }
}
