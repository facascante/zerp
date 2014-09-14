<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel,
    Api\Entity\Tblmodules;

class ModulesController extends AbstractRestfulController
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
    public function addModulesAction()
    {
        $request = $this->getRequest();
        $modules = new Tblmodules();
        $realms = $this->getEntityManager()
          ->find('Api\Entity\Tblrealms', $this->getRequest()->getPost('intrealmid'));
        $modules->setStrmodulename($this->getRequest()->getPost('strmodulename'));
        $modules->setIntrealmid($realms);
        $modules->setIntstatus($this->getRequest()->getPost('intstatus'));
        $this->getEntityManager()->persist($modules);
        $this->getEntityManager()->flush();
        $newId = $modules->getIntmoduleid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }
    public function editModulesAction()
    {
        $request = $this->getRequest();
        $id = (int) $this->params()->fromRoute('id', 0);
      
        $realms = $this->getEntityManager()
          ->find('Api\Entity\Tblrealms', $this->getRequest()->getPost('intrealmid'));
        $modules = $this->getEntityManager()
          ->find('Api\Entity\Tblmodules', $id);
        $modules->setStrmodulename($this->getRequest()->getPost('strmodulename'));
        $modules->setIntrealmid($realms);
        $modules->setIntstatus($this->getRequest()->getPost('intstatus'));
        $this->getEntityManager()->persist($modules);
        $this->getEntityManager()->flush();
        $newId = $modules->getIntmoduleid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }



}

