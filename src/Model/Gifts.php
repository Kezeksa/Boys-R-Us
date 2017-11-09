<?php
/**
 * Created by PhpStorm.
 * User: wilder9
 * Date: 09/11/17
 * Time: 15:33
 */

namespace Boysrus\Model;


class Gifts
{
    /**
     * @var Integer
     */
    private $id;

    /**
     * @var Text
     */
    private $gift;

    /**
     * @var Integer
     */
    private $children_id;

    /**
     * @var Boolean
     */
    private $valid;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Gifts
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * @param mixed $gift
     * @return Gifts
     */
    public function setGift($gift)
    {
        $this->gift = $gift;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChildrenId()
    {
        return $this->children_id;
    }

    /**
     * @param mixed $children_id
     * @return Gifts
     */
    public function setChildrenId($children_id)
    {
        $this->children_id = $children_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * @param mixed $valid
     * @return Gifts
     */
    public function setValid($valid)
    {
        $this->valid = $valid;
        return $this;
    }
}