<?php

namespace Realms\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class RealmsController extends AbstractActionController
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
        'module' => 'Realms',
        'controller' => 'Realms',
        'action' => 'List',
        'records' => $this->getEntityManager()->getRepository('Realms\Entity\Tblrealms')->findAll()
      );
      return new ViewModel($this->data);
    }

    public function addAction()
    {
        return new ViewModel();
    }


}

