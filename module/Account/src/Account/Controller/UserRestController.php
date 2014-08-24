<?php

namespace Account\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel,
    Account\Form\AddUserForm,
    Doctrine\ORM\EntityManager,
    Account\Entity\Users;

class UserRestController extends AbstractRestfulController
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
    
    public function createAction()
    {
        $request = $this->getRequest();
        var_dump($request->getPost());
        die();
        $form = new AddUserForm();
        $user = new Users();
        $repository = $this->getEntityManager()->getRepository('Account\Entity\Users');
        $filter = $repository->getInputFilter();
        $filter->add($user->getInputFilter());
        $form->setInputFilter($filter);
        $form->setData($data);
        $data = array();
        if ($form->isValid()) {
            
            $user->populate($form->getData()); 
            $this->getEntityManager()->persist($user);
            $this->getEntityManager()->flush();
            var_dump($data);
            die();
            //$data['data'] = ;
        }
        return new JsonModel(array(
            'data' => $this->get($id),
        ));
    }

}

