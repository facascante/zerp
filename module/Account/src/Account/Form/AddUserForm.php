<?php
namespace Account\Form;

use Zend\Form\Form;

class AddUserForm extends UserForm
{
    public function __construct()
    {
        parent::__construct('user');

    }
}