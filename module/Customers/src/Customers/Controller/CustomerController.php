<?php

namespace Customers\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CustomerController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
    }


}

