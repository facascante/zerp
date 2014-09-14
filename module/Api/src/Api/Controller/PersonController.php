<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel,
    Api\Entity\Tblperson;

class PersonController extends AbstractRestfulController
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
    public function addPersonAction()
    {
        $request = $this->getRequest();
        $person = new Tblperson();
        $persontype = $this->getEntityManager()
          ->find('Api\Entity\Tblpersontype', $this->getRequest()->getPost('intpersontypeid'));
        $person->setStrpersonname($this->getRequest()->getPost('strpersonname'));
        $person->setStrpersonemail($this->getRequest()->getPost('strpersonemail'));
        $person->setStrpersonphone($this->getRequest()->getPost('strpersonphone'));
        $person->setIntpersontypeid($persontype);
        $person->setIntactive($this->getRequest()->getPost('intactive'));
        $this->getEntityManager()->persist($person);
        $this->getEntityManager()->flush();
        $newId = $person->getIntpersonid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }
    public function editPersonAction()
    {
        $request = $this->getRequest();
        $id = (int) $this->params()->fromRoute('id', 0);
      
        $persontype = $this->getEntityManager()
          ->find('Api\Entity\Tblpersontype', $this->getRequest()->getPost('intpersontypeid'));
        $person = $this->getEntityManager()
          ->find('Api\Entity\Tblperson', $id);
        $person->setStrpersonname($this->getRequest()->getPost('strpersonname'));
        $person->setStrpersonemail($this->getRequest()->getPost('strpersonemail'));
        $person->setStrpersonphone($this->getRequest()->getPost('strpersonphone'));
        $person->setIntpersontypeid($persontype);
        $person->setIntactive($this->getRequest()->getPost('intactive'));
        $this->getEntityManager()->persist($person);
        $this->getEntityManager()->flush();
        $newId = $person->getIntpersonid();
        return new JsonModel(array(
             'id' => $newId,
        ));
    }
  
    public function getPersonTypeListAction()
      {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
          $queryBuilder->select('t')
          ->from('Api\Entity\Tblpersontype', 't'); 
          $results = $queryBuilder->getQuery()
          ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
          return new JsonModel(array(
              'data' => $results,
          ));
    }

}

