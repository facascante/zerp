<?php
namespace Person;

return array(
    'controllers' => array(
        'invokables' => array(
            'Person\Controller\Person' => 'Person\Controller\PersonController',
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
            'person_index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/person',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Person\Controller',
                        'controller'    => 'Person',
                        'action'     => 'index',
                    ),
                ),
            ),
            'person_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/person/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Person\Controller',
                        'controller'    => 'Person',
                        'action'     => 'add',
                    ),
                ),
            ),
        ),
    ),
);