<?php
return array(
   'controllers' => array(
        'invokables' => array(
            'Api\Controller\Realms' => 'Api\Controller\RealmsController',
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
            'realms_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/realms/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'add',
                    ),
                ),
            ),
        ),
    ),
);