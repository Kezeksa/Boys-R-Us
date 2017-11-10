<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 09/11/17
 * Time: 15:19
 */

namespace Boysrus\Controller;

use Boysrus\Model\Countries;
use Boysrus\Model\CountriesManager;

class HomeController extends Controller
{
    public function showHome()
    {
        return $this->twig->render('Home/home.html.twig');
    }

    public function showCountries()
    {
        $listCountry = new CountriesManager();
        $countries = $listCountry->listCountry();

        return $this->twig->render('Santa/SantaPageCountry.html.twig', [
            'countries' => $countries
        ]);
    }

    public function showCities()
    {
        $listCity = new CountriesManager();
        $cities = $listCity->listCity($_GET['id']);

        return $this->twig->render('Santa/SantaPageCities.html.twig', [
            'cities' => $cities
        ]);
    }
}
