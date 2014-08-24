<?php

namespace Account\Controller;

use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\JsonModel;
use Doctrine\ORM\EntityManager;
use Account\Entity\Roles;

class RoleRestController extends AbstractRestfulController
{

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
    public function listAction()
    {
        /*
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('t')
        ->from('Account\Entity\Roles', 't');
        
        $results = $queryBuilder->getQuery()
        ->getResult(\Doctrine\ORM\AbstractQuery::HYDRATE_ARRAY);
        var_dump($results);
        */
        $results =$this->getEntityManager()->getRepository('Account\Entity\Roles')->findAll();
        $data = array();
        foreach($results as $result) {
            $data[] = array(
                'roleId' => $result->getRoleId(),
                'role' => $result->getRole(),
            );
        }
        return new JsonModel(array(
            'data' => $data,
        ));
    }


}

