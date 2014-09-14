<?php

namespace Company\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CompanyController extends AbstractActionController
{    
    /**
     * @var Doctrine\ORM\EntityManager
     */
      protected $em = null;
    
      public function setEntityManager(\Doctrine\ORM\EntityManager $em)
     {
        $this->em = $em;
    }
    public function getEntityManager()
    {
        if (null === $this->em) {
                    $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
         }
         return $this->em;
    }

    public function indexAction()
    {        
      $this->data = array(
        'module' => 'Company',
        'controller' => 'Company',
        'action' => 'List',
        'records' => $this->getEntityManager()->getRepository('Api\Entity\TblCompany')->findAll()
      );
      return new ViewModel($this->data);
    }


}

