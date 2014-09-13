<?php

namespace Modules\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class ModulesController extends AbstractActionController
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
        'module' => 'Modules',
        'controller' => 'Modules',
        'action' => 'List',
        'records' => $this->getEntityManager()->getRepository('Api\Entity\Tblmodules')->findAll()
      );
      return new ViewModel($this->data);
    }

    public function addAction()
    {
        return new ViewModel();
    }


}

