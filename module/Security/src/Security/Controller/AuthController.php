<?php

namespace Security\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{

    public function loginAction()
    {
        $this->layout('layout/login');
        return new ViewModel();
    }

    public function logoutAction()
    {
        return new ViewModel();
    }


}

