<?php

namespace SwPlan\Controller;

use SwPlan\System\ControllerAbstract;

class IndexController extends ControllerAbstract
{
    public function IndexAction()
    {
        $dadosView = array();
        $this->view('index', $dadosView);
    }
}