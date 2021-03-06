<?php
namespace Api;

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
            'Api\Controller\Realms' => 'Api\Controller\RealmsController',
            'Api\Controller\Modules' => 'Api\Controller\ModulesController',
            'Api\Controller\Person' => 'Api\Controller\PersonController',
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
             'person_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/person/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Person',
                        'action'     => 'addPerson',
                    ),
                ),
            ),
            'person_edit' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/api/person/edit/:id',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Person',
                        'action'     => 'editPerson',
                    ),
                ),
            ),
            'modules_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/modules/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Modules',
                        'action'     => 'addModules',
                    ),
                ),
            ),
            'modules_edit' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/api/modules/edit/:id',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Modules',
                        'action'     => 'editModules',
                    ),
                ),
            ),
            'realms_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/realms/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'addRealm',
                    ),
                ),
            ),
            'realms_edit' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/api/realms/edit/:id',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'editRealm',
                    ),
                ),
            ),
           'realm_type_list' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/realms/type/list',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'getRealmTypeList',
                    ),
                ),
            ),
            'realm_list' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/realms/list',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Realms',
                        'action'     => 'getRealmList',
                    ),
                ),
            ),
            'person_type_list' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/api/person/type/list',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Api\Controller',
                        'controller'    => 'Person',
                        'action'     => 'getPersonTypeList',
                    ),
                ),
            ),
        ),
    ),
);