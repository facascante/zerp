<?php

namespace Customers\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CustomersController extends AbstractActionController
{

    public function indexAction()
    { 
      $this->data = array(
        'module' => 'Customers',
        'controller' => 'Customers',
        'action' => 'List',
        'records' => $this->getEntityManager()->getRepository('Api\Entity\Tblcompany')->findAll()
      );
      return new ViewModel($this->data);  
  
    }

    public function addAction()
    {
        return new ViewModel();
    }

    public function editAction()
    {
        return new ViewModel();
    }


}

