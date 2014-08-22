<?php
namespace Account;

return array(
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity',  // Define path of entities
                )
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'  // Define namespace of entities
                )
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Account\Controller\User' => 'Account\Controller\UserController'
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
    ),
    'router' => array(
        'routes' => array(
            'user_index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/account/user',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'User',
                        'action'     => 'index',
                    ),
                ),
            ),
            'user_edit' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/account/user/edit[/:id]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'User',
                        'action'     => 'edit',
                    ),
                ),
            ),
            'user_del' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/account/user/del[/:id]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'User',
                        'action'     => 'del',
                    ),
                ),
            ),
        ),
    ),
);