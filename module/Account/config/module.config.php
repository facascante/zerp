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
        ),
        'configuration' => array(
            'orm_default' => array(
                'metadata_cache' => 'array',
                'query_cache' => 'array',
                'result_cache' => 'array',
                'hydration_cache' => 'array',
                'generate_proxies' => true,
                'proxy_dir' => 'data/DoctrineORMModule/Proxy',
                'proxy_namespace' => 'DoctrineORMModule\Proxy',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Account\Controller\User' => 'Account\Controller\UserController',
            'Account\Controller\UserRest' => 'Account\Controller\UserRestController',
            'Account\Controller\RoleRest' => 'Account\Controller\RoleRestController',
            'Account\Controller\StatusRest' => 'Account\Controller\StatusRestController'
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
            'rest_user_create' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/account/api/user/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'UserRest',
                        'action'     => 'create',
                    ),
                ),
            ),
            'rest_role_list' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/account/api/role/list',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'RoleRest',
                        'action'     => 'list',
                    ),
                ),
            ),
            'rest_status_list' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/account/api/status/list',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Account\Controller',
                        'controller'    => 'StatusRest',
                        'action'     => 'list',
                    ),
                ),
            ),
        ),
    ),
);