<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 10/11/17
 * Time: 01:14
 */

namespace Boysrus\Model;

use Boysrus\Model\Countries;


class CountriesManager extends EntityManager
{
    public function listCountry()
    {
        $query = "SELECT * FROM countries";
        $statement = $this->pdo->query($query);
        $statement->execute();
        $result = $statement->fetchAll(\PDO::FETCH_CLASS, \Boysrus\Model\Children::class);
        return $result;
    }

    public function listCity($id)
    {
        $query = "SELECT * from cities where country_id=$id";
        $statement = $this->pdo->query($query);
        $statement->execute();
        $result = $statement->fetchAll(\PDO::FETCH_CLASS, \Boysrus\Model\Children::class);
        return $result;
    }
}