<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 09/11/17
 * Time: 17:03
 */

namespace Boysrus\Model;

class EntityManager
{
    protected $pdo;
    public function __construct()
    {
        $this->pdo = new \PDO(DSN, USER, PASSWORD, [
            \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        ]);
    }
}