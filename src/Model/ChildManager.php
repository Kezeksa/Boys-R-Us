<?php
/**
 * Created by PhpStorm.
 * User: wilder12
 * Date: 10/11/17
 * Time: 09:56
 */

namespace Boysrus\Model;

/**
 * Class ChildManager
 * @package Boysrus\Model
 */
class ChildManager extends EntityManager
{
    const TABLE = 'children';

    const CLASSREF = Children::class;

    public function loginifnotexist($pseudo)
    {
        $req = "INSERT INTO self::TABLE (username)
            VALUES ('" . $pseudo . "')";
        $statement = $this->pdo->prepare($req);
        $statement->execute();
    }


    public function loginifexist(Children $pseudo)
    {
        $req = "SELECT * FROM children
        WHERE username=:username";
        $statement = $this->pdo->prepare($req);
        $statement->bindValue('username', $pseudo->getUserName(), \PDO::PARAM_STR);
        $statement->execute();
    }
}