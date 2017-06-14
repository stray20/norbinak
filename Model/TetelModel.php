<?php
/**
 * Created by PhpStorm.
 * User: krisztian.mariassy
 * Date: 14/06/2017
 * Time: 11:45
 */

namespace Model;
class TetelModel
{
    public $id;
    public $name;
    public $fasztudja;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getFasztudja()
    {
        return $this->fasztudja;
    }

    /**
     * @param mixed $fasztudja
     */
    public function setFasztudja($fasztudja)
    {
        $this->fasztudja = $fasztudja;
    }
}