<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 10/11/17
 * Time: 01:12
 */

namespace Boysrus\Model;


class Countries
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var Varchar
     */
    private $name;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Countries
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Varchar
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param Varchar $name
     * @return Countries
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}