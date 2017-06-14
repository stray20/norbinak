<?php
/**
 * Created by PhpStorm.
 * User: krisztian.mariassy
 * Date: 14/06/2017
 * Time: 11:45
 */

namespace Model;
class RendelesModel
{

    public $id;
    public $tetelek = [];

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
    public function getTetelek()
    {
        return $this->tetelek;
    }

    /**
     * @param mixed $tetelek
     */
    public function setTetelek($tetelek)
    {
        $this->tetelek = $tetelek;
    }

    public function appendTetelek($tetel)
    {
        $this->tetelek[] = $tetel;
    }
}