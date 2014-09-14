<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel,
    Api\Entity\Tblrealms;

class RealmsController extends AbstractRestfulController
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
    public function addRealmAction()
    {
        $request = $this->getRequest();
        $realms = new Tblrealms();
        $realmTypes = $this->getEntityManager()
          ->find('Api\Entity\Tblrealmtypes', $this->getRequest()->getPost('intrealmtypeid'));
        $realms->setStrrealmkey($this->getRequest()->getPost('strrealmkey'));
        $realms->setStrrealmsecret($this->getRequest()->getPost('strrealmsecret'));
        $realms->setIntrealmtypeid($realmTypes);
        $realms->setIntstatus($this->getRequest()->getPost('intstatus'));
        $this->getEntityManager()->persist($realms);
        $this->getEntityManager()->flush();
        $newId = $realms->getIntrealmid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }
    public function editRealmAction()
    {
        $request = $this->getRequest();
        $id = (int) $this->params()->fromRoute('id', 0);
        $realmTypes = $this->getEntityManager()
          ->find('Api\Entity\Tblrealmtypes', $this->getRequest()->getPost('intrealmtypeid'));
        $realms = $this->getEntityManager()
          ->find('Api\Entity\Tblrealms', $id);
        $realms->setStrrealmkey($this->getRequest()->getPost('strrealmkey'));
        $realms->setStrrealmsecret($this->getRequest()->getPost('strrealmsecret'));
        $realms->setIntrealmtypeid($realmTypes);
        $realms->setIntstatus($this->getRequest()->getPost('intstatus'));
        $this->getEntityManager()->persist($realms);
        $this->getEntityManager()->flush();
        $newId = $realms->getIntrealmid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }
  
  public function addModulesAction()
    {
        $request = $this->getRequest();
        $realms = new Tblrealms();
        $realmTypes = $this->getEntityManager()
          ->find('Api\Entity\Tblmodules', $this->getRequest()->getPost('strrealmkey'));
        $realms->setStrmodulename($this->getRequest()->getPost('strmodulename'));
        $realms->setIntstatus($this->getRequest()->getPost('intstatus'));
        $this->getEntityManager()->persist($realms);
        $this->getEntityManager()->flush();
        $newId = $realms->getIntmoduleid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }
  
    public function getRealmTypeListAction()
    {
      $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('t')
        ->from('Api\Entity\Tblrealmtypes', 't'); 
        $results = $queryBuilder->getQuery()
        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        return new JsonModel(array(
            'data' => $results,
        ));
    }
  
    public function getRealmListAction()
    {
      $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('t')
        ->from('Api\Entity\Tblrealms', 't'); 
        $results = $queryBuilder->getQuery()
        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        return new JsonModel(array(
            'data' => $results,
        ));
    }


}

