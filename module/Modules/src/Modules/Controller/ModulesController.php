<?php

namespace Modules\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ModulesController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

