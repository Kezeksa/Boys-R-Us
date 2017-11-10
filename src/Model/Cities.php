<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 10/11/17
 * Time: 01:10
 */

namespace Boysrus\Model;


class Cities
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
     * @var Integer
     */
    private $country_id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Cities
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Cities
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryId()
    {
        return $this->country_id;
    }

    /**
     * @param mixed $country_id
     * @return Cities
     */
    public function setCountryId($country_id)
    {
        $this->country_id = $country_id;
        return $this;
    }
}