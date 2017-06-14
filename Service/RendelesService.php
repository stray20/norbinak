<?php
/**
 * Created by PhpStorm.
 * User: krisztian.mariassy
 * Date: 14/06/2017
 * Time: 11:45
 */

namespace Service;

use Model\RendelesModel;

class RendelesService
{
    public function rendelesAction()
    {
        $rendeles = new RendelesModel();
        $data = []; // POST adat, vagy ahogy feldolgozod..
        foreach($data['tetelek'] as $tetel)
        {
            $id = $tetel['id'];
            $tetelModel = $tetelService->findById($id);
            $this->appendRendeles($rendeles, $tetelModel);
        }
        $rendeles->save();
    }

    public function appendRendeles($rendeles, $tetelModel)
    {
        // TODO: lehet hozzaadni checkolast hogy van e mar ilyen
        //if(in_array())
        /**
         * @var RendelesModel $rendeles
         */
        $rendeles->appendTetelek($tetelModel);
    }
}