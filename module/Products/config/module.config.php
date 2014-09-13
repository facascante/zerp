<?php
namespace Products;

return array(
    'controllers' => array(
        'invokables' => array(  
            'Products\Controller\index' => 'Products\Controller\ProductsController',
            'Products\Controller\add' => 'Products\Controller\ProductsController',
            'Products\Controller\edit' => 'Products\Controller\ProductsController',
            'Products\Controller\del' => 'Products\Controller\ProductsController'
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
            'products_index' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/products/products',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Products\Controller',
                        'controller'    => 'Products',
                        'action'     => 'index',
                    ),
                ),
            ),
            'products_edit' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/products/edit[/:id]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Products\Controller',
                        'controller'    => 'Products',
                        'action'     => 'edit',
                    ),
                ),
            ),
            'products_del' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/products/del[/:id]',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Products\Controller',
                        'controller'    => 'Products',
                        'action'     => 'del',
                    ),
                ),
            ),
            'products_add' => array(
                'type' => 'Literal',
                'options' => array(
                    'route'    => '/products/add',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Products\Controller',
                        'controller'    => 'Products',
                        'action'     => 'add',
                    ),
                ),
            ),
        ),
    ),
);