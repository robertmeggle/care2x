<?php
return array(
		'view_manager' => array(
				'template_path_stack' => array(
						 __DIR__ . '/../view',
				),
			),
			'router' => array(
				'routes' => array(
					'Skeleton' => array(
						'type' => 'Zend\Mvc\Router\Http\Literal',
						'options' => array(
							'route' => '/Skeleton',
							'defaults' => array(
								'controller' => 'skeleton\Controller\Index',
								'action' => 'index',
							),
						),
					),
				),
			),		
		'controllers' => array (
				'invokables' => array(
							'Skeleton\Controller\Index' => 'Skeleton\Controller\IndexController'
						),
				),	 
	// Doctrine config
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/' . __NAMESPACE__ . '/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ) 
);
