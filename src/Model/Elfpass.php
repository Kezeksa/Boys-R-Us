<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 09/11/17
 * Time: 15:32
 */

namespace Boysrus\Model;


class Elfpass
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var Varchar
     */
    private $passwd;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Elfpass
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @param mixed $passwd
     * @return Elfpass
     */
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
        return $this;
    }
}