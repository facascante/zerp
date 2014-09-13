<?php

namespace Api\Controller;

use Zend\Mvc\Controller\AbstractRestfulController,
    Zend\View\Model\JsonModel;

class RealmsController extends AbstractRestfulController
{

    public function addAction()
    {
        $request = $this->getRequest();
        return new JsonModel(array(
             'data' => $request->getPost(),
        ));
    }

    public function editAction()
    {
        $request = $this->getRequest();
        return new JsonModel(array(
             'data' => $request->getPost(),
        ));
    }


}

