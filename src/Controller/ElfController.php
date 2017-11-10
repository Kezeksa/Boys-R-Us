<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 09/11/17
 * Time: 15:36
 */

namespace Boysrus\Controller;


class ElfController extends Controller
{
    /**
    * affiche les données du modèle
    */
    public function showAction()
    {
        // appels éventuels aux données des modèles
        $menuManager = new ChildrenManager();
        $pizzas = $menuManager->findAll();


        foreach($pizzas as $pizza) {
            $category = $categoryManager->find($pizza->getCategoryId());
            $pizzaCategories[] = ['pizza'=>$pizza, 'category'=>$category];
        }

        // appel de la vue
        return $this->twig->render('Menu/show.html.twig', [
            'pizzaCategories'=>$pizzaCategories ,
            'drinks' => $drinks,
            'home' => $home[0],

        ]);

    }

}
