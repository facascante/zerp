<?php
return array(
  'controllers' => array(
        'invokables' => array(
            'Modules\Controller\Modules' => 'Modules\Controller\ModulesController',
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
            'Modules_index' => array(
                'type' => 'Literal',
                'options' => array(afaf
                    'route'    => '/modules',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Modules\Controller',
                        'controller'    => 'Modules',
                        'action'     => 'index',
                    ),
                ),
            ),
        ),
    ),
);