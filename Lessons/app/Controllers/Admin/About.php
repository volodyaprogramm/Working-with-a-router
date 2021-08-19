<?php
namespace App\Controllers\Admin;


use App\Controllers\AbstractControllers;
use App\Model\About as ModelAbout;

class About extends AbstractControllers

{
    public function index()
    {

        $modelclass = new ModelAbout();
        $list = $modelclass->list();

        $this->gener('About', $list);
    }

    public function about()
    {
        $funget = new ModelAbout();
        $aboutfun = $funget->getAboutByTitle("keyone");

        $this->gener('Model',$aboutfun);
    }

}