<?php

class IndexController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
    	$users=new Users();
        $this->view->name="Sarawut";
        $this->view->item=Users::find();
    }

}
