<?php

return [
    'view_manager' => [
        'template_path_stack' => [
            'maduser' => __DIR__ . '/../view',
        ],
    ],
    'router' => [
        'routes' => [
            'maduser' => [
                'type' => 'Literal',
                'priority' => 1000,
                'options' => [
                    'route' => '/user',
                    'defaults' => [
                        'controller' => 'maduser',
                        'action'     => 'index',
                    ],
                ],
                'may_terminate' => true,
                'child_routes' => [
                    'login' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/login',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action'     => 'login',
                            ],
                        ],
                    ],
                    'authenticate' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/authenticate',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action'     => 'authenticate',
                            ],
                        ],
                    ],
                    'logout' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/logout',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action'     => 'logout',
                            ],
                        ],
                    ],
                    'register' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/register',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action'     => 'register',
                            ],
                        ],
                    ],
                    'resetpassword' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/reset-password',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action'     => 'resetpassword',
                            ],
                        ],
                    ],
                    'changepassword' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/change-password',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action'     => 'changepassword',
                            ],
                        ],
                    ],
                    'changeemail' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/change-email',
                            'defaults' => [
                                'controller' => 'maduser',
                                'action' => 'changeemail',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];