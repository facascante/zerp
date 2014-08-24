<?php
namespace Account\Form;

use Zend\Form\Form,
    DoctrineModule\Persistence\ObjectManagerAwareInterface,
    Doctrine\Common\Persistence\ObjectManager;

class UserForm extends Form
{
    protected $objectManager;
    
    public function __construct()
    {
        parent::__construct('user');

        $this->add(array(
            'name' => 'name',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Enter First Name',
                'id' => 'fname',
            )
        ));
        $this->add(array(
            'name' => 'email',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Enter First Name',
                'id' => 'fname',
            )
        ));
        $this->add(array(
            'name' => 'username',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'placeholder' => 'Enter First Name',
                'id' => 'fname',
            )
        ));
        $this->add(
            array(
                'type' => 'DoctrineModule\Form\Element\ObjectSelect',
                'name' => 'roleId',
                'options' => array(
                    'object_manager'  => $this->getObjectManager(),
                    'target_class'    => 'Account\Entity\Roles',
                    'label_generator' => function($targetEntity) {
                        return $targetEntity->getRoleId() . ' - ' . $targetEntity->getRole();
                    },
                ),
                'attributes' => array(
                    'class' => 'select_role form-control',
                    'data-placeholder' => 'Choose a Role',
                    'tabindex' => '1',
                    'id' => 'roleId',
                ),
            )
        );
      
    }
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }
    
    public function getObjectManager()
    {
        return $this->objectManager;
    }
}