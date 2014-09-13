<?php
namespace Realms;

return array(
    'controllers' => array(
        'invokables' => array(
            'Realms\Controller\Realms' => 'Realms\Controller\RealmsController',
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
            'realms_index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/realms',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Realms\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'index',
                    ),
                ),
            ),
            'realms_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/realms/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Realms\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'add',
                    ),
                ),
            ),
        ),
    ),
);