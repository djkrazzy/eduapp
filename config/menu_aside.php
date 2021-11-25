<?php
// Aside menu
return [

    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Design/Layers.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],

        // Custom
        [
            'section' => 'Custom',
        ],
         [
                            'title' => 'Admisiones',
                            'page'         => '/admin/admisiones',
                            'icon' => 'fas fa-user-graduate',
         ],
         [
                            'title' => 'Usuarios',
                            'page'         => '/users',
                            'icon' => 'fas fa-users',
                        ],
                        [

                            'title' => 'Academico',
                            'page'         => '/cursos',
                            'icon' => 'fas fa-pencil-ruler',
                        ],
                        [
                            'title' => 'Salones',
                            'page'         => '/users',
                            'icon' => 'fas fa-school',
                        ],
                        [
                            'title' => 'Ajustes de Escuela',
                            'page'         => '/users',
                            'icon' => 'fas fa-cogs',
                        ],
                        [
                            'title' => 'Ajustes de sistema',
                            'page'         => '/users',
                            'icon' => 'far fa-sun',
         ],
        [
            'title' => 'Applications',
            'icon' => 'media/svg/icons/Layout/Layout-4-blocks.svg',
            'bullet' => 'line',
            'root' => true,
            'submenu' => [
                [

                    'title' => 'Users',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'List - Default',
                            'page' => 'test',
                        ],
                        [
                            'title' => 'List - Datatable',
                            'page' => 'custom/apps/user/list-datatable'
                        ],
                        [
                            'title' => 'List - Columns 1',
                            'page' => 'custom/apps/user/list-columns-1'
                        ],
                        [
                            'title' => 'List - Columns 2',
                            'page' => 'custom/apps/user/list-columns-2'
                        ],
                        [
                            'title' => 'Add User',
                            'page' => 'custom/apps/user/add-user'
                        ],
                        [
                            'title' => 'Edit User',
                            'page' => 'custom/apps/user/edit-user'
                        ],
                    ]
                ],
                [
                    'title' => 'Profile',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Profile 1',
                            'bullet' => 'line',
                            'submenu' => [
                                [
                                    'title' => 'Overview',
                                    'page' => 'custom/apps/profile/profile-1/overview'
                                ],
                                [
                                    'title' => 'Personal Information',
                                    'page' => 'custom/apps/profile/profile-1/personal-information'
                                ],
                                [
                                    'title' => 'Account Information',
                                    'page' => 'custom/apps/profile/profile-1/account-information'
                                ],
                                [
                                    'title' => 'Change Password',
                                    'page' => 'custom/apps/profile/profile-1/change-password'
                                ],
                                [
                                    'title' => 'Email Settings',
                                    'page' => 'custom/apps/profile/profile-1/email-settings'
                                ]
                            ]
                        ],
                        [
                            'title' => 'Profile 2',
                            'page' => 'custom/apps/profile/profile-2'
                        ],
                        [
                            'title' => 'Profile 3',
                            'page' => 'custom/apps/profile/profile-3'
                        ],
                        [
                            'title' => 'Profile 4',
                            'page' => 'custom/apps/profile/profile-4'
                        ]
                    ]
                ],


                [
                    'title' => 'Todo',
                    'bullet' => 'dot',
                    'submenu' => [
                        [
                            'title' => 'Tasks',
                            'page' => 'custom/apps/todo/tasks'
                        ],
                        [
                            'title' => 'Docs',
                            'page' => 'custom/apps/todo/docs'
                        ],
                        [
                            'title' => 'Files',
                            'page' => 'custom/apps/todo/files'
                        ]
                    ]
                ],
                [
                    'title' => 'Inbox',
                    'bullet' => 'dot',
                    'page' => 'custom/apps/inbox',
                    'label' => [
                        'type' => 'label-danger label-inline',
                        'value' => 'new'
                    ]
                ]
            ]
        ],





    ]

];
