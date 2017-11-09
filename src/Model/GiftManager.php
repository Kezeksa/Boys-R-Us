<?php

namespace Boysrus\Model;

/**
 * Class GiftManager
 * @package Boysrus\Model
 */
class GiftManager extends EntityManager
{
    const TABLE = 'gifts';

    const CLASSREF = Gifts::class;

    /**
     * @param Gifts $gift
     */
    public function insert(Gifts $gift)
    {
        $req = "INSERT INTO" . self::TABLE . "
                (name, valid) 
                VALUES (:gift, 1)";
        $statement = $this->pdo->prepare($req);
        $statement->bindValue('gift', $gift->getName(), \PDO::PARAM_STR);
        $statement->execute();
    }

    public function findGifts()
    {

    }
}