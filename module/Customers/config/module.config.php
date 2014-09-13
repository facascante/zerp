<?php
return array(
  'controllers' => array(
        'invokables' => array(
            'Customers\Controller\Customers' => 'Customers\Controller\CustomersController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),
    'router' => array(
        'routes' => array(
            'Customers_index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Customers',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Customers\Controller',
                        'controller'    => 'Customers',
                        'action'     => 'index',
                    ),
                ),
            ),
            'Customers' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/Customers/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Customers\Controller',
                        'controller'    => 'Customers',
                        'action'     => 'add',
                    ),
                ),
            ),
        ),
    ),
);