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
        $req = "INSERT INTO " . self::TABLE . "
                (name, valid)
                VALUES (:gift, 1)";
        $statement = $this->pdo->prepare($req);
        $statement->bindValue('gift', $gift->getName(), \PDO::PARAM_STR);
        $statement->execute();
    }

    public function findGifts($child)
    {
        $req = "SELECT name
                FROM " . self::TABLE ."
                WHERE child_id=:child_id ";
        $statement = $this->pdo->prepare($req);
        $statement->bindValue('child_id', $child, \PDO::PARAM_INT);
        return $statement->fetchAll(\PDO::FETCH_CLASS, self::CLASSREF);
    }
}
