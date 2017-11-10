<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 09/11/17
 * Time: 15:22
 */

namespace Boysrus\Model;


class Children
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var Varchar
     */
    private $firstname;

    /**
     * @var Varchar
     */
    private $lastname;

    /**
     * @var Integer
     */
    private $age;

    /**
     * @var Varchar
     */
    private $username;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Children
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     * @return Children
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     * @return Children
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Children
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     * @return Children
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }
}