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
);